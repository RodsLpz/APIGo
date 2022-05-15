@extends('layouts.master')
@section('title')
	Calendar APi
@endsection

@section('content')
	<div class="container-fluid">

		<div class="row justify-content-md-center">
			<div class="col-8">
				<iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FManila&amp;src=ZGE3c2xvN25tbTM4aXNybzQ1ZG9nM2c1bDRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23C0CA33&amp;showCalendars=1&amp;title=Smart%20Calendar&amp;showNav=1&amp;showPrint=0&amp;showTz=1&amp;showTabs=1&amp;showTitle=0&amp;showDate=1" style="border-width:0" width="900" height="600" frameborder="0" scrolling="no"></iframe>
			</div>

			<div class="scrollbar scrollbar-success">
				<div class="force-overflow">
					<div class="col-4">
						<h4>Events</h4>
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
							<i class="fas fa-plus"></i>
						</button>
						@foreach($events as $event)
							<div class="card">
								<div class="card-body">
									<div class="time"> <h5>{{ ($event->startDateTime->format('d')) }}<br><span>{{ ($event->startDateTime->format('M')) }}</span></h5></div>
									<div class="details"><span> {{ ($event->name) }} </span><p><i class="fas fa-map-marker-alt"></i> {{ ($event->location) }}</p></div>
									<a href="{{ route('calendar.edit',$event->id) }}"><i class="fas fa-pencil-alt" aria-hidden="true" style="font-size:18px; color:orange" ></a></i>
									<a href="{{route('delete',$event->id)}}"><i class="fa fa-trash-o" style="font-size: 18px; color:red" onclick="return confirm('Are you sure you want to delete this event?');"></i></a>
								</div>
							</div><br>
						@endforeach 
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLongTitle">Create Events</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			<div class="modal-body">
				<form action="{{ route('calendar.store') }}" method="POST" class="form">
					@csrf
					<div class="form_div">
						<input type="text" id="name" name="name" class="form_input" placeholder=" ">
						<label for="name" class="form_label">Event Name</label>
					</div>
					<div class="form_div">
						<input type="datetime-local" id="" name="startdate" class="form_input" placeholder=" ">
						<label for="" class="form_label">Start Date & Time </label>
					</div>

					<div class="form_div">
						<input type="datetime-local" id="" name="enddate" class="form_input" placeholder=" ">
						<label for="" class="form_label">End Date & Time </label>
					</div>

					<div class="form_div">
						<input type="text" class="form_input" name="location" placeholder=" ">
						<label for="" class="form_label">Location</label>
					</div>
			</div>
				<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Create</button>
				</div>
				</form>
		  </div>
		</div>
	</div>
@endsection

