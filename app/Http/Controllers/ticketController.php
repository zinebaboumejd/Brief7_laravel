<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class ticketController extends Controller
{
    //
    public function newticket(){
        $newticket= new Ticket();
        $newticket->titre="ticket3";
        $newticket->service="service3";
        $newticket->quetion="quetion3";
         $newticket->iduser=1;
        $newticket->save();
    }
    public function listticket(){
        $ticket=Ticket::all();
        //  dd($ticket);
        return view('dashboard',['tickets'=>$ticket]);
        // return view('dashboard')->with('tickets',$ticket);
    }
}
