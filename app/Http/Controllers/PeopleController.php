<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PeopleController extends Controller
{
    public function index() {
        $prsn = Person::orderBy('first_name')->paginate(10);
        return view('people.index', compact('prsn'));
    }

    public function create(){
        return view('people.create');
    }
}
