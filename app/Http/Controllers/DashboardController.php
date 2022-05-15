<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Myevent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::get();
        return view('dashboard', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('create.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $startTime = Carbon::parse($request->input('startdate'), 'Asia/Manila');
        $endTime = Carbon::parse($request->input('enddate'), 'Asia/Manila');

        Event::create([
            'name' => $request->input('name'),
            'startDateTime' => $startTime,
            'endDateTime' => $endTime,
            'location' => $request->input('autocomplete')
        ]);

        Myevent::create([
            'event'=>$request->input('name'),
            'id' => Auth::user()->id,
            'name' => Auth::user()->name,
            'place'=> $request->input('autocomplete') , 
            'date'=> $startTime,
            'endDate'=>$endTime          
            
        ]);

        return Redirect::to('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($eventId)
    {
        $event = Event::find($eventId);
		return View::make('edit.dashboard', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $startTime = Carbon::parse($request->input('startdate'), 'Asia/Manila');
        $endTime = Carbon::parse($request->input('enddate'), 'Asia/Manila');
        
        $event = Event::find($request->id);
        $event->update([
            'name' => $request->input('name'),
            'startDateTime' => $startTime,
            'endDateTime' => $endTime,
            'location' => $request->input('autocomplete')
        ]);

        return Redirect::to('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($eventId)
    {
        $event = Event::find($eventId);

        $event->delete();
        return Redirect::to('dashboard');
    }
}
