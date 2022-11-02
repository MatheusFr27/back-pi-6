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
            'email' => 'matheusefranca1727@gmail.com',
            'name' => 'Matheus Eduardo França',
            'password' => 'devomudar',
            'master_access' => 'S',
            'status' => 'A'
        ]);
    }
}
