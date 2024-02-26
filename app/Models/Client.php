<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'Surname',
        'Name',
        'Patronymic',
        'BirthDate',
        'Male',
        'PassportSeries',
        'PassportNumber',
        'IssuedBy',
        'IssueDate',
        'IdentificationNumber',
        'BirthPlace',
        'ResidenceActualPlaceId',
        'ResidenceActualAddress',
        'HomePhoneNumber',
        'MobilePhoneNumber',
        'Email',
        'ResidenceAddress',
        'MaritalStatusId',
        'CitizenshipId',
        'Disability',
        'Pensioner',
        'MonthlyIncome',
    ];
}
