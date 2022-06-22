<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producer;
class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producer::factory()->count(20)->create();
        
    }
}