<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_models')->insert([
            'name' => 'popmie',
            'price' => 2000,
            'status' => "accepted",
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'sedap kari',
            'price' => 1500,
            'status' => "waiting",
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'indomie',
            'price' => 1200,
            'status' => "accepted",
            'created_at' => Carbon::now()
        ],
        [
            'name' => 'mie sedap',
            'price' => 3000,
            'status' => "waiting",
            'created_at' => Carbon::now()
        ]
    );
    }
}
