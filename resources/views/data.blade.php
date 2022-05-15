@extends('layouts.master')
@section('title')
    Places API | Calendar API
@endsection

@section('content')
<div class="container">
    <div class ="table-responsive">
        <table class = "table table-striped table-hover">
            <thead>
                <tr>
                    <th>Event ID</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Start Date & Time</th>
                    <th>End Date & Time</th>
                </tr>
            </thead>
    
            <tbody>
                @foreach($results as $result)
                <tr>
                    <td>{{ ($result->id) }}</td>
                    <td>{{ ($result->event) }}</td>
                    <td>{{ ($result->place) }}</td>
                    <td>{{ ($result->date->format('M d, Y | h:m A')) }}</td>
                    <td>{{ ($result->endDate->format('M d, Y | h:m A')) }}</td>
                    
                </tr>
                @endforeach 
            </tbody>
        </table>
        <div>
    </div>
</div>

@endsection