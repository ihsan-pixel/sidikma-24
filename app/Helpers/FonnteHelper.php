<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class FonnteHelper
{
    public static function sendMessage($phone, $message, $imageUrl = null)
    {
        $client = new Client();
        $apiKey = env('FONNTE_API_KEY');
        $endpoint = 'https://api.fonnte.com/send';

        // Validasi nomor telepon: hanya angka, tanpa plus atau spasi
        $phone = preg_replace('/\D+/', '', $phone);

        \Log::info('Fonnte API Key used: ' . substr($apiKey, 0, 5) . '...');

        $data = [
            'target' => $phone, // ganti dari 'phone' ke 'target'
            'message' => $message,
        ];

        if ($imageUrl) {
            $data['image'] = $imageUrl;
        }

        try {
            $response = $client->post($endpoint, [
                'headers' => [
                    'Authorization' => $apiKey, // tanpa Bearer
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                ],
                'json' => $data,
            ]);

            $result = json_decode($response->getBody(), true);
            \Log::info("Send WA to {$phone}", ['response' => $result]);
            return $result;

        } catch (\GuzzleHttp\Exception\RequestException $e) {
            $response = $e->getResponse();
            $body = $response ? $response->getBody()->getContents() : 'no response body';
            \Log::error('Fonnte sendMessage error: ' . $e->getMessage() . ' | Response: ' . $body);
            return null;
        } catch (\Exception $e) {
            \Log::error('Fonnte sendMessage error: ' . $e->getMessage());
            return null;
        }
    }
}

