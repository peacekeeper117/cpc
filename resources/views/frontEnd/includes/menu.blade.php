<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Computer Club</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access :  &nbsp;


 <a href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();" class="btn btn-danger square-btn-adjust">Logout</a> 
<form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
</form>
                                 
                                       	
 
 </div>



</nav>
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
<<<<<<< HEAD
                        <a @yield('Active_home')  href="{{url('/home')}}"><i class="fas fa-home fa-3x"></i>&emsp;Home&emsp;</a>
                    </li>

                    <li>
                        <a @yield('Active_contestlist') href="{{url('/upcoming-contest-list')}}"><i class="fas fa-flag-checkered fa-3x"></i>&emsp;Upcoming Contest &emsp;</a>
                    </li>
					<li>
                        <a @yield('Active_ranking') href="#"><i class="fas fa-chart-bar fa-3x"></i>&emsp; Ranking &emsp;<span class="fas fa-caret-right fa-2x"></span></a>
                    	<ul class="nav nav-second-level">
                            <li>
                                <a @yield('Active_msranking')  href="{{url('/ranking-on-cf')}}">My Session Ranking&emsp;</a>
   
                            </li>
                            <li>
                                <a href="#">Season&emsp;<span class="fas fa-caret-right fa-2x"></span></a>
                                 <ul class="nav nav-third-level">
                                        <li>
                                            <a @yield('Active_cfranking') href="#"> Monthly Season</a>
                                        </li>
                                    </ul>
                                
=======
                        <a @yield('Active_home')  href="{{url('/home')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>

                    <li>
                        <a @yield('Active_contestlist') href="{{url('/upcoming-contest-list')}}"><i class="fa fa-qrcode fa-3x"></i> Contest List</a>
                    </li>
					<li>
                        <a @yield('Active_ranking')><i class="fa fa-bar-chart-o fa-3x"></i> Ranking<span class="fa arrow"></span></a>
                    	<ul class="nav nav-second-level">
                            <li>
                                <a >My Session Ranking<span class="fa arrow"></span></a>
                               
                                   <ul class="nav nav-third-level">
                                        <li>
                                            <a @yield('Active_ranking') href="{{url('/ranking-on-cf')}}"> Ranking on Codeforces</a>
                                        </li>
                                        <li>
                                            <a @yield('Active_ranking') href="{{url('/ranking')}}" >Overall ranking</a>
                                        </li>
    
                                    </ul>
                            </li>
                            <li>
                                <a href="#">Current Session Ranking</a>
                            </li>
                            <li>
                                <a href="#">Hall of Fame</a>
>>>>>>> 9fd13aabbe941cd19f7ef5c0e6301c40fec4b7e6
                            </li>
                        </ul>
                    
                    </li>	
<<<<<<< HEAD
                    <li>
                        <a  href="#" @yield('Active_exstdnt')><i class="fas fa-graduation-cap fa-3x"></i> Ex-Student </a>
                    </li>				
					<li>
					
                        <a href="#"><i class="fas fa-cubes fa-3x"></i>&emsp;Contributions&emsp;<span class="fas fa-caret-right fa-2x"></span></a>
                        	<ul class="nav nav-second-level">
                        	<li>
                                <a @yield('Active_curated') href="{{url('/curated-contest')}}" > Contest schedule </a>
                            </li>
                            <li>
                                <a href="#">Problem Set<span class="fas fa-angle-right"></span></a>
                                <ul class="nav nav-third-level">
                                	<li>
                                        <a @yield('Active_submit_problem') href="{{url('/submit-problem')}}" >Submit A Problem Set</a>
                                    </li>
                                    <li>
                                        <a href="#">Provide Data Set</a>
                                    </li>
                                </ul>             
                            </li>
                        	</ul>
                    </li>	
					                   
                    <li >
                        <a href="#"><i class="fas fa-cogs fa-3x" @yield('Active_settings')></i>&emsp;Settings&emsp;<span class="fas fa-caret-right fa-2x"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            
                                <a href="/profile/{{ Auth::user()->username }}"@yield('Active_profile')> Profile </a>
                            </li>
                            <li>
                                <a href="/ex_register">Register as Ex Student</a>
                            </li>
                        </ul>
                      </li>  	
=======
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Activity Schedule </a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Alumni </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-cog"></i> Settings <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"> Profile </a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a @yield('Active_curated') href="{{url('/curated-contest')}}"><i class="fa fa-square-o fa-3x"></i> Curated Contest</a>
                    </li>	
>>>>>>> 9fd13aabbe941cd19f7ef5c0e6301c40fec4b7e6
                </ul>
               
            </div>
            
</nav>  
