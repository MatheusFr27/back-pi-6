<?php

use App\Models\BicosCategory;
use Illuminate\Database\Seeder;

class BicosCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BicosCategory::firstOrCreate([
            'description' => 'Pedreiro'
        ], ['description' => 'Pedreiro']);

        BicosCategory::firstOrCreate([
            'description' => 'Pintor'
        ], ['description' => 'Pintor']);

        BicosCategory::firstOrCreate([
            'description' => 'Jardineiro'
        ], ['description' => 'Jardineiro']);

        BicosCategory::firstOrCreate([
            'description' => 'Faxineiro'
        ], ['description' => 'Faxineiro']);

        BicosCategory::firstOrCreate([
            'description' => 'Encanador'
        ], ['description' => 'Encanador']);
    }
}
