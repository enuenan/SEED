<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // DB::table('students')->insert([
      //     'name' => Str::random(10),
      //     'email' => Str::random(10).'@gmail.com',
      //     'address' => 'ctg',
      //     'contact' => 02156452,
      //     'fee' => 1000,
      //     'birth_date' => '1998-04-04'
      // ]);
      factory(App\Student::class,500)->create();
    }
}
