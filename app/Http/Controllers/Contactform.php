<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contactdata;

class Contactform extends Controller
{
    function addContact (Request $req) {
        $contactdata = new Contactdata;
        $contactdata->name= $req->name;
        $contactdata->mobile= $req->mobile;
        $contactdata->comments= $req->comments;
        $contactdata->save();
        return redirect()->route('thankyoupage', app()->getLocale());
    }

}
