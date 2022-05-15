@extends('layouts.master')
@section('title')
	Smart Calendar | Edit
@endsection

@section('content')
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col"><br><br><br>
				{{ Form::model($event, [ 'method' =>'PATCH', 'route' => ['dashboard.update', $event->id]] ) }}

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
						<input type="datetime-local" id="" name="enddate" class="form_input" placeholder=" " value="{{ $event->endDateTime}}">
						<label for="" class="form_label">End Date & Time </label>
					</div>

					<div class="form_div">
						<input type="text" class="form_input" name="autocomplete" id="autocomplete" placeholder=" " value="{{ $event->location}}">
						<label for="" class="form_label">Location</label>
					</div>

                    <input type="hidden" name="id" value="{{$event->id}}">
					<button type="submit" class="btn btn-success">Update</button>

                    {{ Form::close() }}
			</div>

			<div class="col"><br><br><br>
			   <div class="card" style="width: 500px;">
					<div class="card-header">
						<h5 id="place" style="color: #8A2387"><b>Google Places API</b></h5>
					</div>
					<ul class="list-group list-group-flush">
						<li class="list-group-item">Address:<h6 id="add" style="color: #8A2387"></h6></li>
						<li class="list-group-item">Number: <h6 id="num" style="color: #8A2387"></h6></li>
						<li class="list-group-item">Website: <h6 id="web" style="color: #8A2387"></h6></li>
						<li class="list-group-item">Sched: <h6 id="sched" style="color: #8A2387"></h6></li>
					</ul>
					</div>
			</div>
		</div>
	</div>
@endsection