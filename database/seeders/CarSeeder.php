<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Car;

use Illuminate\Support\Facades\Hash;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('cars')->insert([
        //     'name' => Str::random(10).'@gmail.com',
        //     'description' => Str::random(10),
        
            
        // ]);
        Car::factory()->count(20)->create();
    }
}