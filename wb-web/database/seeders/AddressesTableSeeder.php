<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'street' => 'Hoenderdreef',
            'number' => '26',
            'zip' => '9870',
            'city' => 'Zulte',
            'country' => 'BE'
        ]);
    }
}
