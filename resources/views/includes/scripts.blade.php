<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2b5b3c46b9.js" crossorigin="anonymous"></script>

<script>

let autocomplete;
	function initAutocomplete() {
		autocomplete = new google.maps.places.Autocomplete(
			document.getElementById('autocomplete'),
			{
				types: ['establishment'],
				componentRestrictions: {'country' : ['PH']},
				fields: ['place_id', 'business_status' , 'name', 'reviews', 'opening_hours', 'utc_offset_minutes', 'geometry', 'formatted_phone_number', 'website', 'formatted_address']
			}
		);
	
		autocomplete.addListener('place_changed', onPlaceChanged);
			
	}
		
		function onPlaceChanged() {
				var place = autocomplete.getPlace();
	
				if (!place.geometry) {
					document.getElementById('autocomplete').placeholder = 'Enter a place';
				} else {

					document.getElementById('place').innerHTML = place.name;
					document.getElementById('add').innerHTML = place.formatted_address;
					document.getElementById('num').innerHTML = place.formatted_phone_number;
					document.getElementById('web').innerHTML = place.website;

					var schedules = place.opening_hours.weekday_text;
					var str = '<ul>'
					schedules.forEach(function(schedule) {
						str += '<li>'+ schedule + '</li>';
					})
					str += '</ul>';
					document.getElementById('sched').innerHTML = str;

					
				}
				
		}
</script>

<script src="https://maps.google.com/maps/api/js?key=AIzaSyCLNDB_35Hkt0k31JrgEvNq6OzfeCbE9U0&libraries=places&callback=initAutocomplete" type="text/javascript" async defer></script>