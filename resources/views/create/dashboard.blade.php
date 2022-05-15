@extends('layouts.master')
@section('title')
	Smart Calendar | Create
@endsection

@section('content')
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col"><br><br><br>
				<form action="{{ route('dashboard.store') }}" method="POST" class="form">
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
						<input type="text" class="form_input" name="autocomplete" id="autocomplete" placeholder=" ">
						<label for="" class="form_label">Location</label>
					</div>

					<button type="submit" class="btn btn-success">Create</button><br><br><br><br>

				</form>
			</div>

			<div class="col"><br><br><br>
			   <div class="card" style="width: 500px;">
				<h5 class="card-title" id="place">Google Places API</h5>
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