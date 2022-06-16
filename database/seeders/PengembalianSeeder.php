<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengembalian;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengembalian = [
            [
                'nama_lengkap'=>'Alam Adhiyatama',
                'email' => 'alamadhiyatama@gmail.com',
                'no_hp' => '08221824618',
                'nik' => '754389234',
                'usaha' => 'Kuliner',
                'pinjaman' => '500000',
                'status_bayar' => '1',
            ],
        ];

        foreach ($pengembalian as $key => $value){
            Pengembalian::create($value);
        }
    }
}
