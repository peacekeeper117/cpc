@extends('frontEnd.master')
@section('Active_settings')
 class="active-menu" 
@endsection
@section('Active_profile')
 class="active-menu" 
@endsection

@section('datepicker')



<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
@endsection
@section('home_desc')
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{$user->name}}</h2>
                    <p><strong>Name: </strong> {{$user->name}} </p>
                    <p><strong>Username: </strong> {{$user->username}} </p>
                    <p><strong>CodeForces: </strong> {{$user->cf_handle}} </p>
                    <p><strong>UVA ID: </strong> {{$user->uva_id}} </p>
                    <!--p><strong>Skills: </strong>
                        <span class="tags">html5</span> 
                        <span class="tags">css3</span>
                        <span class="tags">jquery</span>
                        <span class="tags">bootstrap3</span>
                    </p-->
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="/uploads/avatars/{{$user->avatar}}" alt="" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                        
                    </figure>
                    <div class="card">
                    <form method="POST" action="/profile" enctype="multipart/form-data">
                        <label>Update Profile Photo</label>
                        <br>
                        <input type="file" id="avatar" name="avatar">
                        {{csrf_field()}}
                        <br>
                        <input type="submit" class="btn btn-sm btn-primary pull right" value="upload">
                    </form>
                </div>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <button class="btn btn-info btn-block" ><span class="fa fa-user"></span>Facebook</button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <div class="btn-group dropup btn-block">
                      <button type="button" class="btn btn-primary"><span class="fas fa-cog"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                       
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                        @if((Auth::user()->id) == $user->id)<li><a href="/editprof/{{ $user->id }}/edit">Edit Profile</a></li>
                        @endif
                      </ul>
                    </div>
                </div>
            </div>
                          
        </div>
    </div>
</div>

@endsection

