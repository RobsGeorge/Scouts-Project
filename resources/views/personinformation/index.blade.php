@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">بيانات المستخدمين</h1>
                        <p>كل بيانات الكشافة</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Person</p>
                        <a href="/personinformation/create/person" class="btn btn-primary btn-sm">Add Person</a>
                    </div>
                </div>                
                @forelse($personinformations as $personinformation)
                    <ul>
                        <li><a href="./personinformation/{{ $personinformation->PersonID }}">{{ ucfirst($personinformation->FirstName) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No Persons are available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection