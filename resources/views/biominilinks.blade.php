<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biomini Link</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/base.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/vendor.css') }}"> 
    <link rel="stylesheet" href="{{ asset('css/main.css') }}"> 

    <style>
        .biolinks{
        margin-top:12rem;
        font-size:16px;
        padding:3rem 1rem;
        align-items: center;
        justify-content:center;
        display:flex;
      }
      button i.fa-trash-can{
        position: relative;
        bottom: 11px;
      }
      @media only screen and (max-width:768px) {
        .biolinks{
        margin-top:10rem;
        font-size:14px;
        padding:3rem 1rem;
        align-items: center;
        justify-content:center;
        display:flex;
      }
        
}
@media only screen and (max-width:600px) {
  .biolinks{
        width:100%;
        margin-top:10rem;
        padding:3rem 1rem;
        align-items: center;
        font-size:10px;
        justify-content:center;
        display:flex;
      }
}
@media only screen and (max-width:400px) {
  .biolinks{
      font-size:7px;
        width:100%;
        margin-top:12rem;
        padding:3rem 1rem;
        align-items: center;
        justify-content:center;
        display:flex;
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
      @foreach ($detail as $data)
      <li><a href="{{ route('links',$data->user_id) }}" title=""><i class="fa-solid fa-link"></i> My Bio links</a></li>
      <li><a href="{{ route('settings',$data->user_id) }}" title=""><i class="fa-solid fa-gear"></i> Settings</a></li>
      @endforeach

     </ul>
     <div class="action">
         <a class="button" href="{{ route('logout') }}">Logout</a> 
     </div>
 </nav>
<div class="container-fluid">

  <div class="row">
    <div class="biolinks col col-md col-sm mx-auto d-flex justify-content-center">
   <table class="table table-hover">
     <thead class="thead-dark">
            <tr>
              <th scope="col">Created At</th>
              <th scope="col">Bio Link</th>
              <th scope="col">Redirect</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            
            @foreach ($detail as $data)
            @if($data)
            <tr>
              <th scope="row">{{ $data->created_at }}</th>
              <td>{{ $url }}</td>
              <td><a href="{{ url($url) }}" class="btn text-primary" target="_blank"><i class="fa-solid fa-up-right-from-square"></i></a></td>
              <td><a href="{{ route('update',$data->id) }}" class="btn text-success"><i class="fa-regular fa-pen-to-square"></i></a></td>
              <td>
                <form action="{{ route('delete',$data->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn text-danger"><i class="fa-solid fa-trash-can"></i></button>
                </form>
              </td>
            </tr> 
            @else
            <tr>
              <th scope="row">Nothing</th>
              <td>Nothing</td>
              <td>
                Nothing
              </td>
              <td>Nothing</td>
              <td>Nothing</td>
            </tr>
            @endif
            @endforeach

          </tbody>
    </table>
  </div>
</div>
</div>
<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>