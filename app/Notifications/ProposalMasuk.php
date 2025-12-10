<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ProposalMasuk extends Notification
{
    use Queueable;

    public $proposal;

    public function __construct($proposal)
    {
        $this->proposal = $proposal;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        // Konversi nominal dari string ke angka
        $nominal = (int) str_replace(['Rp.', '.', ',', ' '], '', $this->proposal->nominal);

        // Mendapatkan nama madrasah/sekolah berdasarkan kelas_id
        $madrasah = $this->getMadrasahName($this->proposal->kelas_id);

        return (new MailMessage)
                    ->subject('Proposal Baru Diterima')
                    ->greeting('Halo Pengurus LP.Maarif Gunungkidul,')
                    ->line('Sebuah proposal baru telah diajukan.')
                    ->line('Madrasah/Sekolah: ' . $madrasah)
                    ->line('Jenis Proposal: ' . $this->proposal->jenis_proposal)
                    ->line('Nominal: Rp. ' . number_format($nominal, 0, ',', '.'))
                    ->action('Lihat Detail', url('/proposal'))
                    ->line('Silakan tinjau proposal tersebut.');
    }

    // Fungsi untuk mendapatkan nama madrasah/sekolah berdasarkan kelas_id
    protected function getMadrasahName($kelas_id)
    {
        $madrasahNames = [
            1 => 'MI YAPPI Badongan',
            10 => 'MI YAPPI Baleharjo',
            11 => 'MI YAPPI Balong',
            12 => 'MI YAPPI Banjaran',
            13 => 'MI YAPPI Bansari',
            14 => 'MI YAPPI Banyusoco',
            15 => 'MI YAPPI Batusari',
            16 => 'MI YAPPI Cekel',
            17 => 'MI YAPPI Doga',
            18 => 'MI YAPPI Dondong',
            19 => 'MI YAPPI Gedad I',
            20 => 'MI YAPPI Gedad II',
            21 => 'MI YAPPI Gubukrubuh',
            22 => 'MI YAPPI Kalangan',
            23 => 'MI YAPPI Kalongan',
            24 => 'MI YAPPI Karang',
            26 => 'MI YAPPI Karangtritis',
            27 => 'MI YAPPI Karangwetan',
            28 => 'MI YAPPI Kedungwanglu',
            29 => 'MI YAPPI Klepu',
            30 => 'MI YAPPI Mulusan',
            31 => 'MI YAPPI Natah',
            32 => 'MI YAPPI Ngembes',
            33 => 'MI YAPPI Nglebeng',
            34 => 'MI YAPPI Ngleri',
            35 => 'MI YAPPI Ngrancang',
            36 => 'MI YAPPI Ngunut',
            37 => 'MI YAPPI Ngrati',
            38 => 'MI YAPPI Nologaten',
            39 => 'MI YAPPI Payak',
            40 => 'MI YAPPI Peyuyon',
            41 => 'MI YAPPI Pijenan',
            42 => 'MI YAPPI Plalar',
            43 => 'MI YAPPI Pucung',
            44 => 'MI YAPPI Purwo',
            45 => 'MI YAPPI Putat',
            46 => 'MI YAPPI Randukuning',
            47 => 'MI YAPPI Rejosari',
            48 => 'MI YAPPI Ringintumpang',
            49 => 'MI YAPPI Sawahan',
            50 => 'MI YAPPI Semoyo',
            51 => 'MI YAPPI Sendang',
            52 => 'MI YAPPI Tambakromo',
            53 => 'MI YAPPI Tanjung',
            54 => 'MI YAPPI Tegalweru',
            55 => 'MI YAPPI Tekik',
            57 => 'MI YAPPI Tobong',
            58 => 'MI YAPPI Wiyoko',
            60 => 'MI Maarif Mulo',
            62 => 'MI Maarif Wareng',
            63 => 'MI Wasathiyah',
            65 => 'MTs YAPPI Dengok',
            66 => 'MTs YAPPI Jetis',
            67 => 'MTs YAPPI Kenteng',
            68 => 'MTs YAPPI Mulusan',
            70 => 'MTs YAPPI Sumberjo',
            71 => 'MTs Jamul Muawanah',
            72 => 'SMP Persiapan Semanu',
            74 => 'SMP Pembangunan I Karangmojo',
            75 => 'SMP Pembangunan Ponjong',
            76 => 'SMP Pembangunan Semin',
        ];

        return $madrasahNames[$kelas_id] ?? 'Nama Madrasah/Sekolah Tidak Dikenal';
    }
}
