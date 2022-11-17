<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            "namalengkap" => "Muthia",
            "nis" => 12100888,
            "jk"=> "P",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('students')->insert([
            "namalengkap" => "Nurul",
            "nis" => 12100648,
            "jk"=> "P",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
        DB::table('students')->insert([
            "namalengkap" => "Yufa Maryafa",
            "nis" => 12100848,
            "jk"=> "P",
            "created_at" => date("Y-m-d H:i:s"),
        ]);
}
}
