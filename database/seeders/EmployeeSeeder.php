<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $companyA = Company::where('name', 'Company A')->first();
        // $companyB = Company::where('name', 'Company B')->first();

        Employee::create([
  
            'name' => 'John Doe',
            'company_id' => 1,
            'image' => 'john-doe.jpg',
        ]);

        Employee::create([
     
            'name' => 'Jane Smith',
            'company_id' => 1,
            'image' => 'jane-smith.jpg',
        ]);

        Employee::create([
    
            'name' => 'Mike Johnson',
            'company_id' => 2,
            'image' => 'mike-johnson.jpg',
        ]);
    }
}
