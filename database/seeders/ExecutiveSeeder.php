<?php

namespace Database\Seeders;

use App\Models\Executive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExecutiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Executive::insert([
            'dui' => '05520201',
            'category' => 'Parcial',
            'user_id' => 1,
        ]);
        Executive::factory(4)->create();
    }
}
