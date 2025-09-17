<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentcontrolelr extends Controller
{
    
    public function studentlist()
    {
        return view('student', ['id' => '001', 
                    'name' => 'Karsten Clyde Turalde', 
                    'courseyear' => 'Bsit 3C']);
    }

    public function studarray(){
        $data = ['studentlist' => [

            ['id' => '001', 'name' => 'Karsten Clyde Turalde', 'courseyear' => 'Bsit 3C'],
            ['id' => '002', 'name' => 'Juan Dela Cruz', 'courseyear' => 'Bsit 3A'],
            ['id' => '003', 'name' => 'Maria Clara', 'courseyear' => 'Bsit 3B'],
            ['id' => '004', 'name' => 'Jose Rizal', 'courseyear' => 'Bsit 3C'],
            ['id' => '005', 'name' => 'Andres Bonifacio', 'courseyear' => 'Bsit 3A'],

        ]
        ];

        return view('student', $data);
    }

    public function studWith(){
        $student = [

            ['id' => '001', 'name' => 'Karsten Clyde Turalde', 'courseyear' => 'Bsit 3C'],
            ['id' => '002', 'name' => 'Juan Dela Cruz', 'courseyear' => 'Bsit 3A'],
            ['id' => '003', 'name' => 'Maria Clara', 'courseyear' => 'Bsit 3B'],
            ['id' => '004', 'name' => 'Jose Rizal', 'courseyear' => 'Bsit 3C'],
            ['id' => '005', 'name' => 'Andres Bonifacio', 'courseyear' => 'Bsit 3A'],
            ['id' => '006', 'name' => 'Emilio Aguinaldo', 'courseyear' => 'Bsit 3B'],

        ];

        return view('student')->with('studentlist', $student);
    }
}
