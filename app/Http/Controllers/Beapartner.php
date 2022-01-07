<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Bepartner;

class Beapartner extends Controller
{
    function addPartner (Request $req) {
        $bepartner = new Bepartner;
        $bepartner->name= $req->name;
        $bepartner->type= $req->type;
        $bepartner->mobile= $req->mobile;
        $bepartner->city= $req->city;
        $bepartner->description = $req->description;
        $bepartner->partnertype = $req->partnertype;
        $bepartner->save();
        //return redirect('/thankyou');
        return redirect()->route('thankyoupage', app()->getLocale());
    }
    function addTechnical (Request $req) {
        $bepartner = new Bepartner;
        $bepartner->name= $req->name;
        $bepartner->type= $req->type;
        $bepartner->mobile= $req->mobile;
        $bepartner->city= $req->city;
        $bepartner->description = $req->description;
        $bepartner->currentservice=$req->currentservice;
        $bepartner->partnertype = $req->partnertype;
        $bepartner->save();
        return redirect()->route('thankyoupage', app()->getLocale());
    }
}
