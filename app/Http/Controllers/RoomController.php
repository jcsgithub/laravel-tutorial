<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class RoomController extends Controller
{
    //

    public function index() 
    {
     
        $rooms = Room::all();
        return view('rooms.rooms', compact('rooms'));
    
    }

    public function show($id)
    {

        $room = Room::find($id);
        return view('rooms.show', compact('room'));

    }

}
