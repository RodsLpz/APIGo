<?php


namespace App\Http\Controllers;
use Carbon\Carbon;

use Spatie\GoogleCalendar\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use App\Models\Myevent;



class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::get();
        return view('calendar', compact('events'));
    }

    public function display()
    {
        // $events = Event::get();

        // return view('events', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $startTime = Carbon::parse($request->input('startdate'), 'Asia/Manila');
        $endTime = Carbon::parse($request->input('enddate'), 'Asia/Manila');

        Event::create([
            'name' => $request->input('name'),
            'startDateTime' => $startTime,
            'endDateTime' => $endTime,
            'location' => $request->input('location')
        ]);

        return redirect()->back()->withMessage('event successfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $results = Myevent::get();
        return View::make('data', compact('results'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($eventId)
    {
        $event = Event::find($eventId);
		return View::make('edit.calendar', compact('event'));

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
            'location' => $request->input('location')
        ]);

        return Redirect::to('calendar');
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
        return Redirect::to('calendar');
    }
}

