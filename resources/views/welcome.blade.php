@extends('welcomelayout')
@section('content')
<h1 class="greeting_title animate-this">
    
    <span class="welcome animate-this">Welcome,</span><br />
    <span class="name animate-this">{{ Str::upper(Auth::user()->name) }}</span>
</h1>
<h3 class="greeting_message animate-this">
    I hope you doing well and good. Now let's start creating your first Biomini link to boost and boast your web presence &#128521;. Click on top right link or <a href="{{ route('creator',Auth::user()->id) }}"><span class="todo">Create New</span></a>
</h3>
@if(session('status'))
<div class="alert alert-success alert-dismissible fade show col-12"> {{ session('status') }} 
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
</div>
@endif
@endsection