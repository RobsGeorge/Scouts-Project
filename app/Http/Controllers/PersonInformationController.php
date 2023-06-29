<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonInformation;

class PersonInformationController extends Controller
{
    public function index()
    {
        $persons = PersonInformation::all();
        return view('personinformation.index', compact('persons'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(PersonInformation $personInformation)
    {

    }

    public function edit(PersonInformation $personInformation)
    {

    }

    public function update(Request $request, PersonInformation $personInformation)
    {

    }

    public function destroy(PersonInformation $personInformation)
    {

    }
}
