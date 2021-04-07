<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
            'name' => 'Assy-Soft',
            'phone' => '+32471144141',
            'fax' => '056255114',
            'vat' => 'BE5142 52 25 22',
            'address_id' => 1
        ]);
    }
}
