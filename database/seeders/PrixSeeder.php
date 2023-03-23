<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrixSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prixes')->insert([
            ['prix'=>'simple'],
            ['prix'=>'double'],
            ['prix'=>'triple'],
            ['prix'=>'familiale'],
            ['prix'=>'petot dye'],
        ]);
    }
}
