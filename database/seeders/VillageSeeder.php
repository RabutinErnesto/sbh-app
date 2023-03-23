<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('villages')->insert([
            'vallage_abr'=>Str::random(3),
            'vallage_name'=>Str::random(10),
            'created_at'=> now(),
            'updated_at'=>now(),
        ]);
    }
}
