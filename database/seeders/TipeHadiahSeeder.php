<?php

namespace Database\Seeders;

use App\Models\TipeHadiah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeHadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = [
            [
              "nama" => "Emas 0,5 Gr",
              "satuan" => "Buah",
            ],
            [
              "nama" => "Emas 1 Gr",
              "satuan" => "Buah",
            ],
            [
              "nama" => "Emas 5 Gr",
              "satuan" => "Buah",
            ],
            [
              "nama" => "Voucher 50rb",
              "satuan" => "Lembar",
            ],
            [
              "nama" => "Voucher 100rb",
              "satuan" => "Lembar",
            ],
        ];

        foreach($data as $datum){
            TipeHadiah::create($datum);
        }
    }
}
