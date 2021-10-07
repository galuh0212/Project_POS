<?php

namespace Database\Seeders;

use App\Models\BackendBd;
use Illuminate\Database\Seeder;

class BackendSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $backenddummy = [
            [
                'name' => 'kalian',
                'kelas'=> 'RPL',
            ],
            [
                'name' => 'kalian',
                'kelas'=> 'RPL',
            ],
            [
                'name' => 'kalian',
                'kelas'=> 'RPL'
            ],
        ];
        foreach ($backenddummy as $bd){
            BackendBd::create($bd);
        }

    }
}
