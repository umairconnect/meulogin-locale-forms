<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Support;

class Supportdata extends Controller
{
    function addSupport (Request $req) {
        $supportdata = new Support;
        $supportdata->groupname=$req->groupname;
        $supportdata->company=$req->company;
        $supportdata->name=$req->name;
        $supportdata->mobile=$req->mobile;
        $supportdata->assist=$req->assist;
        $supportdata->save();
        return redirect()->route('thankyoupage', app()->getLocale());
    }
}
