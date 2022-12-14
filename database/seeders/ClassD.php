<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClassD extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class')->insert([
            "namakelas"=>"10 PPLG 1",
            "namajurusan"=> "Pengembang Perangkat Lunak Dan Gim",
        ]);
        DB::table('class')->insert([
            "namakelas"=>"10 PPLG 2",
            "namajurusan"=> "Pengembang Perangkat Lunak Dan Gim",
        ]);
        DB::table('class')->insert([
            "namakelas"=>"11 RPL 1",
            "namajurusan"=> "Rekayasa Perangkat Lunak",
        ]);
        DB::table('class')->insert([
            "namakelas"=>"11 RPL 1 ",
            "namajurusan"=> "Rekasyasa Perangkat Lunak",
        ]);

    }
}
