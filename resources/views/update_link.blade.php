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
            height:80vh;
            margin-top:3rem;
            position:relative;
            left:-50%;
            transform: translateX(50%)

        }
        
input[type="email"],
input[type="number"],
input[type="search"],
input[type="text"],
input[type="tel"],
input[type="url"],
input[type="password"],
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
    font-size:1.5rem !important;
	min-height: 15rem;
}
textarea:focus {
    box-shadow: none;
    outline: none;
    border: none;
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
             <li><a href="{{ route('links',Auth::user()->id) }}" title=""><i class="fa-solid fa-link"></i> My Bio links</a></li>
             <li><a href="{{ route('settings',Auth::user()->id) }}" title=""><i class="fa-solid fa-gear"></i> Settings</a></li>
         </ul>
         <div class="action">
             <a class="button" href="{{ route('logout') }}">Logout</a> 
         </div>
     </nav>

     <div class="container mt-5">
       <div class="row">
        <div class="col-12 form-div">
            <h1 class="animate-intro" font-size:5.2rem;">Create Bio Link</h1>
            <div class="alert alert-primary" role="alert">
                @if(session('status'))
                    {{ session('status') }}
                    <span><a href="{{ route('welcome') }}" style="text-decoration:underline;">Go back</a></span>
                @endif
                
              </div>
            <form method="POST" action="{{ route('updated',$detail->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="image text-center">
                    <img class="img-circle mx-auto img-responsive d-block img-fluid img-thumbnail height: auto;" src="{{ asset('images/'.$detail->image) }}" alt="profile picture" id="profile_img" />
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Profile Picture</label>
                    <input type="file" name="image" onchange="document.querySelector('#profile_img').src = window.URL.createObjectURL(this.files[0])" required class="form-control" id="image" accept="image/*" />
                    <br />
                    <span style="color:red;">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label for="username" class="form-label">Profile Name</label>
                    <input type="text" value="{{ $detail->name }}" required class="form-control" id="username" name="name" placeholder="John Doe">
                    <br />
                    <span style="color:red;">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                  </div>
                  <div class="mb-3">
                    <label for="profession" class="form-label">Profession</label>
                    <input type="text" name="profession" value="{{ $detail->profession }}" required class="form-control" id="profession" placeholder="Product Manager" value="{{ old('profession') }}" />
                    <br />
                    <span style="color:red;">
                        @error('profession')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" required class="form-control" value="{{ $detail->email }}" id="email" name="email" placeholder="johndoe@email.com" value="{{ old('email') }}" />
                  <br />
                  <span style="color:red;">
                      @error('email')
                          {{ $message }}
                      @enderror
                  </span>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" name="phone" required class="form-control" id="phone" value="{{ $detail->phone }}" placeholder="9000000001"  value="{{ old('phone') }}" />
                    <br />
                    <span style="color:red;">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="textAreaExample">Short Bio</label>
                    <textarea name="short_bio" class="form-control" id="textAreaExample1" rows="2" placeholder="Describe yourself with quick words and make sure your selection of words will be enough to express you and your expertise in short reading." ></textarea>
                    <br />
                    <span style="color:red;">
                        @error('short_bio')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="textAreaExample">Interests</label>
                    <textarea name="interest" class="form-control" id="textAreaExample1" rows="2" placeholder=" Reading, Touring, Coding (Seperate your key interests with commas)"></textarea>
                    <br />
                    <span style="color:red;">
                        @error('interest')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label for="website" class="form-label">Website</label>
                    <input type="url" name="website" required class="form-control" id="website" placeholder="www.johndoe.com" value="{{ $detail->website }}" />
                    <br />
                    <span style="color:red;">
                        @error('website')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label for="portfolio" class="form-label">Portfolio</label>
                    <input type="url" name="portfolio" required class="form-control" id="portfolio" placeholder="www.portfolio.johndoe.com"  value="{{ $detail->portfolio }}" >
                    <br />
                    <span style="color:red;">
                        @error('portfolio')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label for="ig" class="form-label">Instagram</label>
                    <input type="url" value="{{ $detail->insta }}" name="ig" required class="form-control" id="ig" placeholder="https://www.instagram.com/cristiano/">
                    <br />
                    <span style="color:red;">
                        @error('ig')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label for="fb" class="form-label">Facebook</label>
                    <input type="url" name="fb" value="{{ $detail->facebook }}" required class="form-control" id="fb" placeholder="https://www.facebook.com/fordmustang/">
                    <br />
                    <span style="color:red;">
                        @error('fb')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label for="twitter" class="form-label">Twitter(X)</label>
                    <input type="url" name="twitter" value="{{ $detail->twitter }}" required class="form-control" id="twitter" placeholder="https://x.com/elonmusk">
                    <br />
                    <span style="color:red;">
                        @error('twitter')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label for="ldin" class="form-label">LinkedIn</label>
                    <input type="url" name="ldin" required value="{{ $detail->linkedin }}" class="form-control" id="ldin" placeholder="https://www.linkedin.com/in/sundarpichai/">
                    <br />
                    <span style="color:red;">
                        @error('ldin')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mb-3">
                    <label for="resume" class="form-label">Resume</label>
                    <input type="file" name="resume" value="{{ $detail->resume }}" required class="form-control" id="resume" accept=".pdf" />
                    <br />
                    <span style="color:red;">
                        @error('resume')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <input type="submit" class="btn btn-primary" value="Submit" />
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