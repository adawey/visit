<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'name' => Str::random(10),
            'place' => Str::random(10),
            'description' => Str::random(10),
            'price' => '1250',
            'image' => '45454544554',
        ]);
    }
}
