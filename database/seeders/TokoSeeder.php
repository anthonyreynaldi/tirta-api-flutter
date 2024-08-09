<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
          [
            "nama" => "Bintang Mandiri",
            "alamat" => "Tengku Istkandar",
            "telp" => "+6223423423498"
          ],
          [
            "nama" => "Mandiri Baru",
            "alamat" => "T Inskandar",
            "telp" => "+6937223423498"
          ],
          [
            "nama" => "Mirza",
            "alamat" => "Tengku Iskandar",
            "telp" => "+6223491583498"
          ],
          [
            "nama" => "Puga Jaya",
            "alamat" => "Kebun Raya",
            "telp" => "+6223429015498"
          ],
        ];

        foreach($data as $datum){
            Toko::create($datum);
        }
    }
}
