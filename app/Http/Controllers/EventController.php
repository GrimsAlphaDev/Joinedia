<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\DetailUser;
use App\Models\University;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('addEvent.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEventRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEventRequest $request)
    {
        // return $request;

        // get user id
        $user_id = auth()->user()->id;
        // search detail user id
        $detail_user = DetailUser::where('user_id', $user_id)->first();
        $detail_user_id = $detail_user->id;
        $detail_user_university = $detail_user->university_id;

        if (isset($request->volunteer)) {
            if ($request->volunteer == 1) {
                $volunteer = true;
            } else {
                $volunteer = false;
            }
        } else {
            $volunteer = false;
        }
        
        // return $request->file('gambar');

        // store image to public/assets/image
        $image = $request->file('gambar');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/image'), $image_name);

        
        $event = new Event();
        $event->detail_user_id = $detail_user_id;
        $event->university_id = $detail_user_university;
        $event->nama_event = $request->nama_event;
        $event->deskripsi = $request->deskripsi_event;
        $event->image = $image_name;
        $event->tempat = $request->tempat;
        $event->kategori = $request->kategori;
        $event->tanggal_mulai = $request->tanggal_mulai;
        $event->tanggal_selesai = $request->tanggal_selesai;
        $event->open_volunteer = $volunteer;
        $event->quota = $request->quota;
        $event->status = "Active";
        $event->save();

        if ($event) {
            return redirect()->route('dashboard')->with('success', 'Event berhasil ditambahkan');
        } else {
            return redirect()->route('dashboard')->with('error', 'Event gagal ditambahkan');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }

    public function event(Request $request){
        
        $user_id = auth()->user()->id;
        $detail_user = DetailUser::where('user_id', $user_id)->first()->university_id;

        $events = [];

        $events_akademik = Event::where('university_id', $detail_user)->where('kategori', 'Akademik')->get();
        $events_non_akademik = Event::where('university_id', $detail_user)->where('kategori', 'nonakademik')->get();

        return view('eventPage.eventPage', ['events_akademik' => $events_akademik, 'events_non_akademik' => $events_non_akademik]);

    }
}
