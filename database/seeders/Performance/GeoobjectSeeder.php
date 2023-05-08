<?php

namespace Database\Seeders\Performance;

use App\Models\Geoobject;
use Illuminate\Database\Seeder;

class GeoobjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(int $count = 100): void
    {
        Geoobject::factory($count)->create();
    }
}
