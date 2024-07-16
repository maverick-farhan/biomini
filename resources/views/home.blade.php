<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

   <meta charset="utf-8">
	<title>Biomini| Create, Share, Boost</title>
	<meta name="description" content="">  
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="{{ asset('css/base.css') }}"> 
   <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"> 
   <link rel="stylesheet" href="{{ asset('css/main.css') }}">    


	<script src="{{ asset('js/modernizr.js') }}"></script>
	<script src="{{ asset('js/pace.min.js') }}"></script>

	<link rel="icon" type="image/png" href="{{ asset('/favicon-16x16.png') }}">
<style>
	header.main-header{
	height:20vh;
}
::-webkit-scrollbar {
  width: 5px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px rgb(246, 246, 246); 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #1AAB8D; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #1AAB8D; 
}
</style>
</head>

<body id="top">
	
   <header class="main-header">
   	
   	<div class="logo">
	      <a href="{{ route('home') }}"><img src="{{ asset('logo.png') }}" alt="biomini logo img"/></a>
	   </div> 
	   <a class="menu-toggle" href="#"><span>Menu</span></a>   	

   </header>

   <nav id="menu-nav-wrap">

   	<h3>Navigation</h3>   	
		<ul class="nav-list">
			<li><a class="" href="{{ route('home') }}"><i class="fa-solid fa-tent"></i> Home</a></li>
			<li><a class="" href="{{ route('welcome') }}"><i class="fa-solid fa-campground"></i> Biomini Creator</a></li>
		</ul>
		<div class="action">
			@if(auth()->check())
			<a class="button" href="{{ route('logout') }}">Logout</a>
			@else
			<a class="button" href="{{ route('login') }}">Login Now</a>
			<a class="button" href="{{ route('signup') }}">Create Account</a>
			@endif
		</div>

	</nav>
   <div id="main-content-wrap">
   	<section id="intro">
		   
		   <div class="row intro-content">
		   	<div class="col-twelve">

			  		
					<h1 class="animate-intro">
						Create . Share . Boost your presence digitally. 
					</h1>	
					
					<div class="buttons">
						<a class="button stroke animate-intro" href="{{ route('welcome') }}" title="">Create Bio</a>
					</div>					
			  	</div>		   			
		   </div>
		</section>
   	<section id="infos">

   		<div class="info-entry">

   			<div class="half-grey"></div>

   			<div class="row info-entry-content">

   				<div class="media-wrap">
   					<div class="media animate-this"  data-animate="fadeInRight">
   						<img src="{{ asset('second-biomini.png') }}" alt="">
   					</div>   				      				
   				</div>

   				<div class="col-six text-part">   				
   					
   					<h5 class="animate-this" data-animate="fadeInLeft">&#x2665;Biomini&#x2665;.</h5>
   					<h2 class="animate-this info" data-animate="fadeInLeft">Share your Bio instantly</h2>

   					<p class="animate-this" data-animate="fadeInLeft">Biomini is a side project I made to develope and practice my development skills. You are most welcome in this project to start using it right away or contribute through code. </p>
					<a href="{{ route('welcome') }}" class="button animate-this" data-animate="fadeInLeft">Let's Build Bio</a>
   					<a href="{{ url('https://github.com/maverick-farhan/biomini') }}" target="_blank" class="animate-this" data-animate="fadeInLeft"><i class="fa-brands fa-github"></i></a>
   			 					
   				</div>   				
   				
   			</div>
   		</div>
   	</section>


  		<section id="subscribe">
               
         <div class="row subscribe-content">
            <div class="col-twelve">

               <h2 class="h01 animate-this">This feature is not currently working, because I was mentally invested my every brain cells in overcoming the undefined variable errors.</h2>
               <form id="mc-form" class="group" novalidate="true" autocomplete="off">

               	<div class="row">
               		<div class="col-eight tab-full left animate-this" data-animate="fadeInLeft">					
			   				<input type="email" required name="email" class="email" id="mce-EMAIL" placeholder="Enter Your Email" required>			   				
			   			</div>

				   		<div class="col-four tab-full right animate-this"  data-animate="fadeInRight">
				   			<input type="submit" value="Get Notified" name="subscribe" class="button large">
				   		</div>				   		
               	</div>	
					</form>
            
            </div>
         </div>
                
      </section> 		
   
   </div>




   <div id="go-top">
		<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
	</div>

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 
   <script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
   <script src="{{ asset('js/plugins.js') }}"></script>
   <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>