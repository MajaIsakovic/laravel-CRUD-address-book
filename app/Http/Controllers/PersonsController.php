<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

use Session;

class PersonsController extends Controller
{
    //treba da vratimo sve iz baze preko modela (koji je zaduzen za bazu)
   // READ all users
    public function returnAll(){
        $people = Person::all();
        return view('people_list')->with('people', $people);
    }

    // CREATE new user
    public function createUser(Request $request){
        // dd($request->all());
        $person = new Person;

        $person->name = $request->name;
        $person->surname = $request->surname;
        $person->address = $request->address;
        $person->city = $request->city;
        $person->email = $request->email;
        $person->phone = $request->phone;

        $person->save();

        Session::flash('success', 'New Member Created');
        return redirect()->back();
    }

    //Delete User
    public function deleteUser($id){

        $person = Person::find($id);
        $person->delete();

        Session::flash('success', 'Member Deleted');
        return redirect()->back();
    }

    //Update User
    public function updateUser($id){

       $person = Person::find($id);
        // var_dump($person);
        //prosledjuje se kao prugi parametar ova varijabla:
        // return view('form-update', compact('person'));
        // ili:
        return view('edit')->with('person', $person);
    }

    public function saveUser(Request $request, $id){

        $person = Person::find($id);

        $person->name = $request->name;
        $person->surname = $request->surname;
        $person->address = $request->address;
        $person->city = $request->city;
        $person->email = $request->email;
        $person->phone = $request->phone;

        $person->save();

        Session::flash('success', 'Member Updated');
        return redirect()->route('people_list');
    }
}
