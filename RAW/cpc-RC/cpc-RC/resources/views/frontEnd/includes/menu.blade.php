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
                        <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="ui.html"><i class="fa fa-desktop fa-3x"></i> UI Elements</a>
                    </li>
                    <li>
                        <a  href="/forums"><i class="fa fa-qrcode fa-3x"></i> Join the discussion</a>
                    </li>
						   <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Standings </a>
                    </li>	
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Activity Schedule </a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Alumni </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Settings <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/profile/{{ Auth::user()->username }}"> Profile </a>
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
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Curated Contest</a>
                    </li>	
                </ul>
               
            </div>
            
</nav>  
