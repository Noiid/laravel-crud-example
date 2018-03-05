<?php

use Illuminate\Database\Seeder;
use \App\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            Jurusan::create([
                'nama' => 'jurusan ' . $i
            ]);
        }
    }
}
