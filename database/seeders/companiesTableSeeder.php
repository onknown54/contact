<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\facades\DB;
use App\Models\Company;
use App\Models\Person;

class companiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();
        Company::factory(10)->create()->each(function($company){
            $company->people()->saveMany(
                Person::factory(3)->create()
            );
        });
    }
}
