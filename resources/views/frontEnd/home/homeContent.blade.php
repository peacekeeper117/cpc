@extends('frontEnd.master')
@section('Active_home')
 class="active-menu" 
@endsection
@section('home_intro')
<div class="row">
       <div class="col-md-12">
           <h2>User Dashboard</h2>   
           <h5>Welcome {{auth::user()->name}} , Love to see you back. </h5>
       </div>
</div>
@endsection
@section('home_notifications')
<div class="row">
                	<div class="col-md-3 col-sm-6 col-xs-6">           
						<div class="panel panel-back noti-box">
                			<span class="icon-box bg-color-red set-icon">
                    		<i class="fa fa-envelope-o"></i>
                			</span>
                		<div class="text-box" >
                    		<p class="main-text">0 New</p>
                    		<p class="text-muted">Messages</p>
                		</div>
             			</div>
		     		</div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
						<div class="panel panel-back noti-box">
                			<span class="icon-box bg-color-green set-icon">
                    		<i class="fa fa-bars"></i>
                			</span>
                		<div class="text-box" >
                    		<p class="main-text">0 Tasks</p>
                    		<p class="text-muted">Remaining</p>
                		</div>
             			</div>
		     		</div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
						<div class="panel panel-back noti-box">
                			<span class="icon-box bg-color-blue set-icon">
                    		<i class="fa fa-bell-o"></i>
                			</span>
                			<div class="text-box" >
                    			<p class="main-text">0 New</p>
                    			<p class="text-muted">Notifications</p>
                			</div>
             			</div>
		     		</div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
						<div class="panel panel-back noti-box">
                			<span class="icon-box bg-color-brown set-icon">
                    		<i class="fa fa-rocket"></i>
                			</span>
                		<div class="text-box" >
                    		<p class="main-text">0 Contest</p>
                    		<p class="text-muted">Up-Coming</p>
                		</div>
             			</div>
		     		</div>
			</div>
@endsection