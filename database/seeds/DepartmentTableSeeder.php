<?php

use Illuminate\Database\Seeder;
use App\Department;
class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Department::insert([
            'department' => 'reception',
        ]);
        Department::insert([
            'department' => 'nursing',
        ]);
        Department::insert([
            'department' => 'laboratory',
        ]);
        Department::insert([
            'department' => 'radiology',
        ]);
        Department::insert([
            'department' => 'treatment',
        ]);
        Department::insert([
            'department' => 'optical',
        ]);
    }
}
