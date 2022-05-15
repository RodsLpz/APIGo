@extends('layouts.master')
@section('title')
	Calendar API | Edit
@endsection

@section('content')
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col"><br><br><br>
				{{ Form::model($event, [ 'method' =>'PATCH', 'route' => ['calendar.update', $event->id]] ) }}

					<input type="hidden" name="_token" value="{{csrf_token()}}">
                    
					<div class="form_div">
						<input type="text" id="name" name="name" class="form_input" placeholder=" " value="{{ $event->name }}">
						<label for="name" class="form_label">Event Name</label>
					</div>
					<div class="form_div">
						<input type="datetime-local" id="" name="startdate" class="form_input" placeholder=" " value="{{ $event->startDateTime}}">
						<label for="" class="form_label">Start Date & Time </label>
                        
					</div> 
                    

					<div class="form_div">
						<input type="datetime-local" id="" name="enddate" class="form_input" placeholder=" " value="{{ ($event->endDateTime->format('dd/MM/yyyy hh:mm'))}}">
						<label for="" class="form_label">End Date & Time </label>
					</div>

					<div class="form_div">
						<input type="text" class="form_input" name="location" id="location" placeholder=" " value="{{ $event->location}}">
						<label for="" class="form_label">Location</label>
					</div>

                    <input type="hidden" name="id" value="{{$event->id}}">
					<button type="submit" class="btn btn-success">Update</button>

                    {{ Form::close() }}
			</div>

			{{-- <div class="col"><br><br><br>
			   <div class="card" style="width: 500px;">
					<div class="card-header">
						Featured
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item" id="add">Address: </li>
						<li class="list-group-item" id="num">Number: </li>
						<li class="list-group-item" id="web">Website: </li>
						<li class="list-group-item" id="sched">Sched: </li>
					</ul>
					</div>
			</div> --}}
		</div>
	</div>
@endsection