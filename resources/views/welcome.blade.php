@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">{{ config('app.name') }}</h1>
                <p>Athanasius Scouts Software System at St Athanasius Church Nasr City, 2023</p>
                <br>
                <a href="/personinformation" class="btn btn-outline-primary">Show Persons</a>
            </div>
        </div>
    </div>
@endsection