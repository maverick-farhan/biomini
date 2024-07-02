<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Build Bio Mini | Creating....</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/base.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">    

    <style>
        .container{
            width:100%;
            height:100vh;
            display:flex;
            justify-content: center;
            align-items: flex-start;
            flex-direction: column;
            padding:16rem 10rem
        }
        .form-div{
            position:relative;
            top:10rem;
            margin-top:4rem;

        }
        input[type="email"],
input[type="number"],
input[type="search"],
input[type="text"],
input[type="tel"],
input[type="url"],
input[type="password"],
textarea,
select {
	display: block;
	height: 4rem;
	padding: 1.5rem 2.5rem;
	border: 0;
	outline: none;
	vertical-align: middle;
	color: rgb(0, 0, 0);
	font-family: "Noto Sans", sans-serif;
	font-size: 1.5rem;
	line-height: 3rem;
	max-width: 100%;
	background: rgba(255, 255, 255, 0.253);
	border: none;
	outline:1px solid #000;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	-webkit-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
textarea {
	min-height: 25rem;
}

input[type="email"]:focus,
input[type="number"]:focus,
input[type="search"]:focus,
input[type="text"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
input[type="password"]:focus,
textarea:focus,
select:focus {
	background: rgba(255, 255, 255, 0.74);
	color: rgb(0, 0, 0);
    box-shadow: none;
    outline:1px solid #00000071;
    border: none;
}

label,
legend {
	font-family: "Noto Sans", sans-serif, sans-serif;
	font-size: 1.4rem;
	margin-bottom: .6rem;
	color: black;
	display: block;
}

input[type="checkbox"],
input[type="radio"] {
	display: inline;
}

label > .label-text {
	display: inline-block;
	margin-left: 1rem;
	font-family: "Noto Sans", sans-serif;
	line-height: inherit;
}

label > input[type="checkbox"],
label > input[type="radio"] {
	margin: 0;
	position: relative;
	top: .15rem;
}
.button,
a.button,
button,
input[type="submit"],
button[type="submit"],
input[type="reset"],
input[type="button"] {
	display: inline-block;
    font-family: "Noto Sans", sans-serif;
	font-size: 1.4rem;
    font-weight:900;
	text-transform: uppercase;
	letter-spacing: .3rem;
	height: 5.4rem;
	line-height: 5.4rem;
	padding: 0 3rem;
	margin: 0 .3rem 1.2rem 0;
	background: #d8d8d8;
	color: #000000;
	text-decoration: none;
	cursor: pointer;
	text-align: center;
	white-space: nowrap;
	border: none;
	-moz-transition: all 0.3s ease-in-out;
	-o-transition: all 0.3s ease-in-out;
	-webkit-transition: all 0.3s ease-in-out;
	-ms-transition: all 0.3s ease-in-out;
	transition: all 0.3s ease-in-out;
}
.button.button-primary,
a.button.button-primary,
button[type="submit"]:hover,
button[type="submit"]:focus,
button.button-primary,
input[type="submit"].button-primary,
input[type="reset"].button-primary,
input[type="button"].button-primary {
	background: #14ad8a !important;
	color: #FFFFFF;
}
    </style>
</head>
<body>
    <header class="main-header">
   	
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" alt="biomini logo img"/></a>
        </div> 
        <a class="menu-toggle" href="#"><span>Menu</span></a>  	
 
    </header>
    <nav id="menu-nav-wrap">

        <h3>Navigation</h3>   	
         <ul class="nav-list">
             <li><a href="{{ route('links',Auth::id()) }}" title=""><i class="fa-solid fa-link"></i> My Bio links</a></li>
             <li><a href="{{ route('settings',Auth::user()->id) }}" title=""><i class="fa-solid fa-gear"></i> Settings</a></li>
         </ul>
         <div class="action">
             <a class="button" href="{{ route('logout') }}">Logout</a> 
         </div>
     </nav>

     <div class="container mt-5">
       <div class="row">
        <div class="col-12 form-div">
            <h1 class="animate-intro" font-size:5.2rem;">Settings</h1>
            <form method="POST" action="{{ route('updateSettings',["user" => $user->id]) }}">
                @csrf
                @method('PUT')
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" required class="form-control" name="name" value="{{ $user->name }}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="John Doe">
                    <br />
                    <span style="color:red;">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input placeholder="example@email.com" required type="email" name="email" class="form-control" value="{{ $user->email }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <br />
                  <span style="color:red;">
                    @error('email')
                    {{ $message }}
                    @enderror
                  </span>
                </div>
                
                <input type="submit" class="btn btn-primary" value="Update"/>
              </form>
    
        </div>
       </div>
     </div>

     <div id="preloader"> 
    	<div id="loader"></div>
   </div> 
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
   <script src="{{ asset('js/plugins.js') }}"></script>
   <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>