<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::firstOrCreate([
            'email' => 'matheusefranca1727@gmail.com'
        ], [
            'email' => env('EMAIL_ADMIN'),
            'name' => 'Matheus Eduardo França',
            'password' => env('PASSWORD_ADMIN'),
            'master_access' => 'S',
            'status' => 'A'
        ]);
    }
}
