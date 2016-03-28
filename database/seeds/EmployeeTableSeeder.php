<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Employee::create([
            'name'          => 'Jane Doe',
            'email'         => 'jane@doe.com',
            'password'      => Hash::make('Testing123')
        ]);
    }
}
