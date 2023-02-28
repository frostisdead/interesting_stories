<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home Page</title>
</head>
<header>
<h1>Interesting Stories</h1>
</header>
<body>
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		<!-- @if (Illuminate\Support\Facades\Auth::user() && Illuminate\Support\Facades\Auth::user()->role == 1)
		<li>
		<a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
		</li>
		@endif -->
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
		<li>
		<a class="nav-link" href="{{ route('showpost') }}">Show all posts</a>
		</li>
		<li>
		<a class="nav-link" href="{{ route('createpost') }}">Create post</a>
		</li>
      @if (!Illuminate\Support\Facades\Auth::user())
		<li>
		<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
		</li>
      @endif
		@if (Illuminate\Support\Facades\Auth::user())
      <li>
      <a class="nav-link" href="signout">Logout</a>
      </li>
		@endif
		</ul>
</div>
@foreach ($stories as $stor)
   <div class="row row-cols-1 row-cols-sm-2 g-3">
   <div class="col">
      <div class="card">
        <img src="assets/images/bs-images/img-2x1.png" class="card-img-top" alt="card-grid-image">
        <div class="card-body">
           <h5 class="card-title">{{$stor->title}}</h5>
           <p class="card-text">{{$stor->story}}</p>
           <a href="https://code-boxx.com"><button>Go to the post</button></a>
        </div>
      </div>
   </div>
   <!-- <div class="col">
      <div class="card">
        <img src="assets/images/bs-images/img-2x1.png" class="card-img-top" alt="card-grid-image">
        <div class="card-body">
           <h5 class="card-title">{{$stor->title}}</h5>
           <p class="card-text">{{$stor->story}}</p>
           <a href="https://code-boxx.com"><button>Go to the post</button></a>
        </div>
      </div>
   </div>
   <div class="col">
      <div class="card">
        <img src="assets/images/bs-images/img-2x1.png" class="card-img-top" alt="card-grid-image">
        <div class="card-body">
           <h5 class="card-title">{{$stor->title}}</h5>
           <p class="card-text">{{$stor->story}}</p>
           <a href="https://code-boxx.com"><button>Go to the post</button></a>
        </div>
      </div>
   </div>
   <div class="col">
      <div class="card">
        <img src="assets/images/bs-images/img-2x1.png" class="card-img-top" alt="card-grid-image">
        <div class="card-body">
           <h5 class="card-title">{{$stor->title}}</h5>
           <p class="card-text">{{$stor->story}}</p>
           <a href="https://code-boxx.com"><button>Go to the post</button></a>
        </div>
      </div>
   </div> -->
</div>
@endforeach   
</body>

<footer>
	© 2022 Your Blog Coach
</footer>