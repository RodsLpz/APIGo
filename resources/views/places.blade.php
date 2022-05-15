<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Places API</title>
        {{-- <link rel="stylesheet" href="all.min.cs"> --}}

        <link rel="stylesheet" href="{{asset('css/custom.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

        {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script> --}}

    </head>

    <body>
        @include('includes.navbar')
        <div class="app">
            <h2 data-text="Places API ...">Places API ...</h2>
        </div>
            
        <input type="checkbox" id="check">
        <div class="box">
            <input name="autocomplete" id="autocomplete" type="text" placeholder="Where to go?">
            <label for="check"><i class="fa fa-search"></i>
            </label>
        </div>

        <div class="container">
            <div class="row justify-content-md-center">
                <div class="card" style="width: 40rem;">
                    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                    <div class="card-body">
                    <h5 class="card-title" id="place">Google Places API</h5>
                    <h6 id="rate"></h6>
                    {{-- <div class="star">
                        <div class="stars-outer">
                          <div class="stars-inner"></div>
                        </div> 
                      </div> --}}
                    {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
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


        @include('includes.scripts')
        
    </body>
</html>