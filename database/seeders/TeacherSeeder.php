<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\teacher;
use Dotenv\Store\File\Paths;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rules\Unique;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //this method is used many fake data to insert into the database
      for($i=1;$i<=10;$i++){
        teacher::create([
            'name' => fake()->name,
            'email' => fake()->unique()->email,
            'address' => fake()->address,
        ]);
      }
      


        // // this method to input data from json file
        // $json = File::get(path: 'database/json/teacher.json');
        // $teachers = collect(json_decode($json));
        // $teachers->each(function ($teacher) {
        //     teacher::create([
        //         'name' => $teacher->name,
        //         'email' => $teacher->email,
        //         'address' => $teacher->address,
        //     ]);
        // });

        //this method is user multiple value add
        //   $teachers=collect([
        //         ['name' => 'jamal',
        //           'email' => 'jamal@gmail.com',
        //           'address' => 'mirpur'
        //         ],
        //         ['name' => 'kamal',
        //           'email' => 'kamal@gmail.com',
        //           'address' => 'mirpur'
        //         ],
        //         ['name' => 'kamrul',
        //           'email' => 'kamrul@gmail.com',
        //           'address' => 'mirpur'
        //         ],
        //         ['name' => 'sojib',
        //           'email' => 'sojib@gmail.com',
        //           'address' => 'mirpur'
        //         ],
        //   ]);
        //   $teachers->each(function($teacher){
        //        teacher::insert($teacher);
        //   });

        //     //this method is use for single data add
        //    teacher::create([
        //     'name' => 'jalal',
        //     'email' => 'jalla@gmail.com',
        //     'address' => 'mirpur'
        //    ]); 
    }
}
