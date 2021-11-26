<?php

namespace Database\Seeders;

use App\Models\PackageType;
use Illuminate\Database\Seeder;

class PackageTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        PackageType::create([
            'name'=> 'parcel'
        ]);

        PackageType::create([
            'name' => 'box'
        ]);

        PackageType::create([
            'name' => 'envelope'
        ]);

        PackageType::create([
            'name' => 'large box'
        ]);
    }
}
