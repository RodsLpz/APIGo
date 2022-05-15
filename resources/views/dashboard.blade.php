@extends('layouts.master')
@section('title')
	Smart Calendar
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
							<a href="{{ route('dashboard.create') }}" class = "btn btn-success a-btn-slide-text">
								<i class="fas fa-plus-circle"></i>
							</a>
						@foreach($events as $event)
							<div class="card">
								<div class="card-body">
									<div class="time"> <h5>{{ ($event->startDateTime->format('d')) }}<br><span>{{ ($event->startDateTime->format('M')) }}</span></h5></div>
									<div class="details"><span> {{ ($event->name) }} </span><p><i class="fas fa-map-marker-alt"></i> {{ ($event->location) }}</p></div>
									<a href="{{ route('dashboard.edit',$event->id) }}"><i class="fas fa-pencil-alt" aria-hidden="true" style="font-size:18px; color:orange" ></a></i>
									<a href="{{route('delete',$event->id)}}"><i class="fa fa-trash-o" style="font-size: 18px; color:red"></i></a>
								</div>
							</div><br>
						@endforeach 
					</div>
				</div>
			</div>
		</div>
	</div>

	
@endsection