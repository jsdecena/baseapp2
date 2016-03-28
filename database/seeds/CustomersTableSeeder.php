<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Customer::create([
            'name'          => 'John Doe',
            'email'         => 'john@doe.com',
            'password'      => Hash::make('Testing123')
        ]);
    }
}
