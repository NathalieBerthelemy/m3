<?php

namespace App\Http\Controllers;

use App\prestart;
use Illuminate\Http\Request;


class PrestartController extends Controller
{

    function index()
    {
        return view('welcome');
    }

    function store(request $request)
    {

        $prestart = new prestart();

        $prestart->BusinessName = request('BusinessName');
        $prestart->QuebecAddress = request('QuebecAddress');
        $prestart->City = request('City');
        $prestart->PostalCode = request('PostalCode');
        $prestart->CorporateAddress = request('CorporateAddress');
        $prestart->IncomeValue = request('IncomeValue');
        $prestart->BusinessType = request('BusinessType');
        $prestart->SectorActivity = request('SectorActivity');
        $prestart->BusinessClass = request('BusinessClass');
        $prestart->ExistCommittee = request('ExistCommittee');
        $prestart->BusinessLevel = request('BusinessLevel');
        $prestart->BusinessClientBase = request('BusinessClientBase');
        $prestart->IncomeValue = request('IncomeValue');
        $prestart->EmployeeNumber = request('EmployeeNumber');
        $prestart->OfferToClient = request('OfferToClient');


        $prestart->save();


    }

    function p() { //test method to see if data is retrieved from database
        $prestart = Prestart::all()->toArray();

        return $prestart;


    }
}
