<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudUpdateController extends Controller
{
    // Update function here
    public function index() {
        $users = DB::select('select * from student');
        return view('stud_edit_view', ['users' => $users]);
    }

    public function show($id) {
        $users = DB::select('select * from student where id = ?', [$id]);
        return view('stud_update', ['users' => $users]);
    }

    public function edit(Request $request, $id) {
        $name = $request->input('stud_name');
        $age = $request->input('stud_age');
        DB::update('update student set name=?, age=? where id=?', [$name, $age, $id]);
        echo 'Record updated successfully.<br />';
        echo '<a href="/view-student-edit">Click here</a> to go back.';
    }
}
