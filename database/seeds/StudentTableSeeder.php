<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  $student1= new Student;
        // $student1->name="Mg Mg";
        // $student1->email="mgmg@gmail.com";
        // $student1->address="Bahan";
        // $student1->save();

        // $student2= new Student;
        // $student2->name="Su Su";
        // $student2->email="susu@gmail.com";
        // $student2->address="Latha";
        // $student2->save();

        factory(App\Student::class,10)->create();
    }
}
