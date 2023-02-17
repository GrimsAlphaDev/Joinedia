<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\DetailUser;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // get Event Where University_id = DetailUser University_id
        $user_id = auth()->user()->id;
        $detail_user = DetailUser::where('user_id', $user_id)->first()->university_id;

        $events = [];
        // get all event with university_id = detail_user university_id
        $events = Event::where('university_id', $detail_user)->get();

        return view('dashboard', ['events' => $events]);
    }

    public function selectedEventDashboard($id){

        // get Event Where University_id = DetailUser University_id
        $user_id = auth()->user()->id;
        $detail_user = DetailUser::where('user_id', $user_id)->first()->university_id;
 
        $events = [];
         // get all event with university_id = detail_user university_id
        $events = Event::where('university_id', $detail_user)->get();
        
        $detail_events = Event::where('id', $id)->first();

        return view('dashboardSelected', ['events' => $events, 'detail_events' => $detail_events], ['detail_event' => $detail_events]);
    }
}
