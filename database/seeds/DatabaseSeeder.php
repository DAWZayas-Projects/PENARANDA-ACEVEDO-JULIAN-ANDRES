<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $approved = \App\Category::create(['name' => 'Prueba']);
        \App\Category::create(['name' => 'Mas Prueba']);

        $approved->questions()->createMany([
            ['text' => 'Primera', 'state' => 'APPROVED'],
            ['text' => 'Segunda', 'state' => 'APPROVED'],
            ['text' => 'Tercera', 'state' => 'APPROVED'],
            ['text' => 'Cuarta', 'state' => 'PENDING'],
        ]);
    }
}
