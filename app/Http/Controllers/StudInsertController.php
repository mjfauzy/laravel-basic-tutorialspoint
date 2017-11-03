<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller
{
    public function insertform() {
        return view('stud_create');
    }

    public function insert(Request $request) {
        $name = $request->input('stud_name');
        $age = $request->input('stud_age');
        DB::insert('insert into student (name,age) values(?,?)',[$name,$age]);
        echo 'Record inserted successfully.<br />';
        echo '<a href="/insert">Click here</a> to go back.';
    }
}
