<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statuses;
use App\User;

class StatusController extends Controller
{
    public function index(){
        return Statuses::with('user')->latest()->get();
    }

    public function store(Request $request){
        ///middleware

        //validate
        $this->validate($request, ['body' => 'required']);

        //create the satatus
        $status = User::find(1)
                    ->statuses()
                    ->create($request->only(['body']));


        //return it and include the users
        return $status->load('user');
    }


}
