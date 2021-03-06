<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorController extends Controller
{
    public function index(){
        $instructors = Instructor::join('users', 'users.id', '=', 'instructors.user_id')
        ->select('users.lname', 'users.fname', 'instructors.*')->orderByRaw('lname', 'fname')->get();
        return view('instructors.index', ['instructors'=>$instructors]);
    }

    public function create(){
        return view('instructors.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'user_id'=> 'required|numeric',
            'aoe'=>'required',
            'rating'=>'required|numeric',
        ]);

        Instructor::create($request->all());

        return redirect('/instructors')->with('info', 'New instructor has been added.');

    }

    public function edit($id) {
        $instructor = Instructor::find($id);

        return view('instructors.edit', ['instructor'=>$instructor]);
    }

    public function update(Request $request, $id) {
        $instructor = Instructor::find($id);

        $instructor->update($request->all());

        return redirect('/instructors')->with('info', "The data has been updated.");
    }
}
