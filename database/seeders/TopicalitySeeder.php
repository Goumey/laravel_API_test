<?php

namespace Database\Seeders;

use App\Models\Topicality;

use Illuminate\Database\Seeder;

class TopicalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
Topicality::factory()
->count(50)
->create();
    }
}
