<?php

namespace Database\Seeders;

use App\Models\Hadiah;
use App\Models\TipeHadiah;
use App\Models\Toko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tipe_hadiah = TipeHadiah::all();
        $toko = Toko::all();

        $data = [
            [
                'kode' => "TTOL-OOA-23-06-00001",
                'tipe_hadiah_id' => $tipe_hadiah[0]->id,
                'toko_id' => $toko[0]->id
            ],
            [
                'kode' => "TTOL-OOA-23-06-00002",
                'tipe_hadiah_id' => $tipe_hadiah[0]->id,
                'toko_id' => $toko[1]->id
            ],
            [
                'kode' => "TTOL-OOA-23-06-00003",
                'tipe_hadiah_id' => $tipe_hadiah[2]->id,
                'toko_id' => $toko[1]->id
            ],
            [
                'kode' => "TTOL-OOA-23-06-00004",
                'tipe_hadiah_id' => $tipe_hadiah[3]->id,
                'toko_id' => $toko[2]->id
            ],
            [
                'kode' => "TTOL-OOA-23-06-00005",
                'tipe_hadiah_id' => $tipe_hadiah[1]->id,
                'toko_id' => $toko[2]->id
            ],
            [
                'kode' => "TTOL-OOA-23-06-00006",
                'tipe_hadiah_id' => $tipe_hadiah[2]->id,
                'toko_id' => $toko[3]->id
            ],
            [
                'kode' => "TTOL-OOA-23-06-00007",
                'tipe_hadiah_id' => $tipe_hadiah[4]->id,
                'toko_id' => $toko[3]->id
            ],
        ];

        foreach($data as $datum){
            Hadiah::create($datum);
        }
    }
}
