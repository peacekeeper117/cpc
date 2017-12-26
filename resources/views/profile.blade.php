@extends('layouts.app')

@section('content')
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
         <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{$user->name}}</h2>
                    <p><strong>Username: </strong> {{$user->username}} </p>
                    <p><strong>CodeForces: </strong> {{$user->cf_handle}} </p>
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
                        <input type="file" id="avatar" name="avatar">
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-sm btn-primary pull right" value="upload">
                    </form>
                </div>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong> 20,7K </strong></h2>                    
                    <p><small>Followers</small></p>
                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>245</strong></h2>                    
                    <p><small>Following</small></p>
                    <button class="btn btn-info btn-block" ><span class="fa fa-user"></span> Apsarap </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>43</strong></h2>                    
                    <p><small>Snippets</small></p>
                    <div class="btn-group dropup btn-block">
                      <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu text-left" role="menu">
                        <li><a href="#"><span class="fa fa-envelope pull-right"></span> Send an email </a></li>
                        <li><a href="#"><span class="fa fa-list pull-right"></span> Add or remove from a list  </a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="fa fa-warning pull-right"></span>Report this user for spam</a></li>
                        <li class="divider"></li>
                        <li><a href="/editprof/{{ $user->id }}/edit">Edit Profile</a></li>
                      </ul>
                    </div>
                </div>
            </div>
         </div>                 
        </div>
    </div>
</div>

@endsection