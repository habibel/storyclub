<?php

namespace App\Http\Controllers;
use App\contact;
use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function contact(Request $Request){
        $this->validate($request ,[
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ]);
        $inputs = $request->all();
        $contacts = contact::create($inputs);
        return redirect()->back();
    }
}
