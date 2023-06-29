<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonInformation extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'PersonID',
        'FirstName',
        'SecondName',
        'ThirdName',
        'FourthName',
        'DateOfBirth',
        'RaqamQawmy',
        'ScoutJoiningYear',
        'BloodTypeID',
        'FacebookProfileURL',
        'InstagramProfileURL',
        'PersonalEmail',
        'MotherFirstName',
        'MotherSecondName'
    ];
}
