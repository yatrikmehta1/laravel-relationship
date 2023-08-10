<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([

            'name' => 'Company A',
        ]);

        Company::create([

            'name' => 'Company B',
        ]);

        Company::create([

            'name' => 'Company C',
        ]);

        Company::create([

            'name' => 'Company D',
        ]);
    }
}
