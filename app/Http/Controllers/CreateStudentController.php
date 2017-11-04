<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Events\StudentAdded;
use Event;

class CreateStudentController extends Controller
{
    // create student method here
    public function insertform() {
        return view('stud_create');
    }

    public function insert(Request $request) {
        $name = $request->input('stud_name');
        $age = $request->input('stud_age');
        DB::insert('insert into student (name,age) value (?,?)', [$name,$age]);
        echo "Record inserted successfully.<br />";
        echo '<a href="/event">Click here</a> to go back.';

        // firing an event
        Event::fire(new StudentAdded($name,$age));
    }
}
