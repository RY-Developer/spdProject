<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(ref_bidangTableSeeder::class);
//        $this->call(ref_BulanTableSeeder::class);
        
//
//        $this->call(ref_editdataTableSeeder::class);
//        $this->call(ref_entryTableSeeder::class);
//
        
//        $this->call(ref_kegiatanTableSeeder::class);
//        $this->call(ref_programTableSeeder::class);
//        $this->call(ref_rek_1Seeder::class);
//        $this->call(ref_rek_2Seeder::class);
//        $this->call(ref_rek_3Seeder::class);
//        $this->call(ref_rek_4Seeder::class);
//        $this->call(ref_rek_5Seeder::class);
//
//        $this->call(ref_sub_unitTableSeeder::class);
//        $this->call(ref_sumber_danaTableSeeder::class);
//        $this->call(ref_tahunTableSeeder::class);
//        $this->call(ref_unitTableSeeder::class);
//        $this->call(ref_urusanTableSeeder::class);

//        $this->call(ta_daskTableSeeder::class);
//        $this->call(ta_kegiatanTableSeeder::class);
//        $this->call(ta_spd_rincTableSeeder::class);
//        $this->call(ta_spdTableSeeder::class);
//        $this->call(ta_sub_unitTableSeeder::class);

        $this->call(UsersTableSeeder::class);

    }

}
