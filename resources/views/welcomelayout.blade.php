<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Biomini | Let's Create, Share and Boost web presence.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">    

    <style>
        .main{
            width:100%;
            display:flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            padding:10rem 20rem 0 20rem;
        }
        span.welcome{
            font-weight:100;
            color:#14ad8a;

        }
        span.name{
            font-size:6rem;
            font-weight:900;
        }
        h3.greeting_message{
            font-size:4rem;
            font-weight:normal;
        }
        span.todo{
            color:#14ad8a;
            text-decoration: underline;
        }
        @media only screen and (max-width:768px) {
        .main{
            padding:12rem 10rem 0 10rem;
        }
        span.welcome{
            font-weight:100;
            color:#14ad8a;

        }
        span.name{
            font-size:4rem;
            font-weight:900;
        }
        h3.greeting_message{
            font-size:3rem;
            font-weight:normal;
        }
        span.todo{
            color:#14ad8a;
            text-decoration: underline;
        }
        
}
@media only screen and (max-width:600px) {
    .main{
            padding:13rem 9rem 0 9rem;
            span.welcome{
            font-weight:100;
            color:#14ad8a;

        }
        span.name{
            font-size:4rem;
            font-weight:900;
        }
        h3.greeting_message{
            font-size:3rem;
            font-weight:normal;
        }
        span.todo{
            color:#14ad8a;
            text-decoration: underline;
        }
}
@media only screen and (max-width:400px) {
    .main{
            padding:4rem 2rem 0 2rem;
        }
        span.welcome{
            font-weight:100;
            color:#14ad8a;

        }
        span.name{
            font-size:4rem;
            font-weight:900;
        }
        h3.greeting_message{
            font-size:3rem;
            font-weight:normal;
        }
        span.todo{
            color:#14ad8a;
            text-decoration: underline;
        }
}
    </style>
</head>
<body>
    <header class="main-header">
   	
        <div class="logo">
            <a href="{{ route('welcome') }}"><img src="{{ asset('logo.png') }}" alt="biomini logo img"/></a>
        </div> 
        <a class="create-bio" href="{{ route('creator',Auth::user()->id) }}"><span>Create New</span></a>  	
        <a class="menu-toggle" href="#"><span>Menu</span></a>  	
 
    </header>
    <nav id="menu-nav-wrap">

        <h3>Navigation</h3>   	
         <ul class="nav-list">
            @foreach($detail as $data)
            <li><a href="{{ route('links',$data->user_id) }}" title=""><i class="fa-solid fa-link"></i> My Bio links</a></li>
            @endforeach
            <li><a href="{{ route('settings',Auth::id()) }}" title=""><i class="fa-solid fa-gear"></i> Settings</a></li>
        </ul>
         <div class="action">
             <a class="button" href="{{ route('logout') }}">Logout</a> 
         </div>
     </nav>

     <div class="main">
        @yield('content')
    </div>




     <div id="preloader"> 
    	<div id="loader"></div>
   </div> 
   <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
   <script src="{{ asset('js/plugins.js') }}"></script>
   <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>