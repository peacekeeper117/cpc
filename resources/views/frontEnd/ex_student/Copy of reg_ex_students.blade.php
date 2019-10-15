@extends('frontEnd.master')
@section('extracss')
<link href="{{asset('frontEnd/css/add_field.css')}}" rel="stylesheet" />

@endsection
@section('home_desc')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                     <script type="text/javascript">
                         var room = 1;
                         function education_fields() {
                          
                             room++;
                             var objTo = document.getElementById('education_fields');
                             var divtest = document.createElement("div");
                         	divtest.setAttribute("class", "form-group removeclass"+room);
                         	var rdiv = 'removeclass'+room;
                             divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="institute_name" name="institute_name[]" value="" placeholder="institute_name"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="subject" name="subject[]" value="" placeholder="subject"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="degree" name="degree[]" value="" placeholder="Degree"></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"> <input class="form-control" id="educationDate" name="educationDate[] value="" placeholder="Passing Year""><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';
                             
                             objTo.appendChild(divtest);
                         }
                            function remove_education_fields(rid) {
                         	   $('.removeclass'+rid).remove();
                            }
                              
				 	</script>
                
                     <script type="text/javascript">
                         var room = 1;
                         function project_fields() {
                          
                             room++;
                             var objTo = document.getElementById('project_fields');
                             var divtest = document.createElement("div");
                         	divtest.setAttribute("class", "form-group removeclass"+room);
                         	var rdiv = 'removeclass'+room;
                             divtest.innerHTML = '<div class="panel panel-default"><div class="panel-body"><div id="project_fields"></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="text" class="form-control" id="project_name" name="project_name[]" value="" placeholder="project name"></div></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="text" class="form-control" id="platform" name="platform[]" value="" placeholder="Platforms"></div></div><div class="col-sm-3 nopadding"><div class="form-group"><input type="text" class="form-control" id="used" name="used[]" value="" placeholder="used"></div></div><div class="input-group-btn"><button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></div><div class="clear"></div></div></div>';
                             
                             objTo.appendChild(divtest);
                         }
                            function remove_education_fields(rid) {
                         	   $('.removeclass'+rid).remove();
                            }
                              
				 	</script>
				 	<script>
                    var room = 1;
                    function achievment_fields() {
                     
                        room++;
                        var objTo = document.getElementById('achievment_fields');
                        var divtest = document.createElement("div");
                    	divtest.setAttribute("class", "form-group removeclass"+room);
                    	var rdiv = 'removeclass'+room;
                        divtest.innerHTML = '<div class="col-sm-11 nopadding"><div class="input-group"><div class="form-group"><input type="text" class="form-control" id="achievments" name="achievment[]" value="" placeholder="achievment"></div><div class="input-group-btn"><button class="btn btn-danger" type="button" onclick="remove_achievment_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div><div class="clear_achiev"></div>';
                        
                        objTo.appendChild(divtest);
                    }
                       function remove_achievment_fields(rid) {
                    	   $('.removeclass'+rid).remove();
                       }
				 	</script>
				 	<script>
                    var room = 1;
                    function work_fields() {
                     
                        room++;
                        var objTo = document.getElementById('work_fields');
                        var divtest = document.createElement("div");
                    	divtest.setAttribute("class", "form-group removeclass"+room);
                    	var rdiv = 'removeclass'+room;
                        divtest.innerHTML = '<div class="col-md-8"><div class="col-sm-7 nopadding"><div class="form-group"><input type="text" class="form-control" id="work" name="work[]" value="" placeholder="working at "></div></div><div class="col-sm-5 nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="work" name="designation[]" value="" placeholder="designation"><div class="input-group-btn"><button class="btn btn-danger" type="button" onclick="remove_work_fields('+ room +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></div></div></div><div class="work_clear"></div></div></div>';
                        objTo.appendChild(divtest);
                    }
                       function remove_work_fields(rid) {
                    	   $('.removeclass'+rid).remove();
                       }
				 	</script>
				 	<script>
                    var room = 1;
                    function worked_fields() {
                     
                        room++;
                        var objTo = document.getElementById('worked_fields');
                        var divtest = document.createElement("div");
                    	divtest.setAttribute("class", "form-group removeclass"+room);
                    	var rdiv = 'removeclass'+room;
                        divtest.innerHTML = '<div class="col-md-8"><div class="col-sm-7 nopadding"><div class="form-group"><input type="text" class="form-control" id="worked" name="worked[]" value="" placeholder="worked at "></div></div><div class="col-sm-5 nopadding"><div class="form-group"><div class="input-group"><input type="text" class="form-control" id="work" name="designation[]" value="" placeholder="designation"><div class="input-group-btn"><button class="btn btn-danger" type="button" onclick="remove_worked_fields('+ room +');"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></button></div></div></div><div class="worked_clear"></div></div></div>';
                        objTo.appendChild(divtest);
                    }
                       function remove_worked_fields(rid) {
                    	   $('.removeclass'+rid).remove();
                       }
				 	</script>
                
                <i>***The informations are kept blank,won't be shown in the profile</i>
 <form method="POST" action="{{url('/ex_register')}}" enctype="multipart/form-data">
    {{ csrf_field() }}

	<div class="form-group">
			<div class="panel row">
            <label class="col-md-2 control-label" name="bsc_pass_year">Passing Year BSc :</label>
            	<input class="col-sm-2 nopadding" type="text" id="bsc_pass_year" name="bsc_pass_year" value=""/>
            	<label class="col-md-2 control-label" name="bsc_pass_year">Batch :</label>
            	<input class="col-sm-3 nopadding" type="text" id="batch" name="batch" value=""/>
        	</div>
		<div class="panel row">
            <label class="col-md-4 control-label">Post Graduate Degrees :</label>
            <br>
            <input type="hidden" name="count" value="1" />
            <div class="panel panel-default">
                  <div class="panel-body"> 
    			<div id="education_fields">
          
        		</div>
       			<div class="col-sm-3 nopadding">
				<div class="form-group">
    				<input type="text" class="form-control" id="institute_name" name="institute_name[]" value="" placeholder="Institute name">
  				</div>
				</div>
				<div class="col-sm-3 nopadding">
  				<div class="form-group">
    				<input type="text" class="form-control" id="subject" name="subject[]" value="" placeholder="subject">
  				</div>
				</div>
				<div class="col-sm-3 nopadding">
				<div class="form-group">
    				<input type="text" class="form-control" id="degree" name="degree[]" value="" placeholder="degree">
  				</div>
				</div>

				<div class="col-sm-3 nopadding">
  					<div class="form-group">
    					<div class="input-group">
 		     				<input class="form-control" id="educationDate" name="educationDate[]" value="" placeholder="Passing Year">
      						<div class="input-group-btn">
        						<button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      						</div>
    					</div>
  					</div>
				</div>
				<div class="clear"></div>
  
 				</div>
				</div>
        </div>
	        
                       
            <div class="panel row">
            <label class="col-md-2 control-label" name="foi">proficiency:</label>
           		<input class="col-sm-7 nopadding" type="text" id="foi" name="foi" value=""/>
       		</div>
       		<div class="panel row">
            <label class="col-md-4 control-label" name="projects">Projects:</label>
            <br>
           		<div class="panel panel-default">
                	<div class="panel-body">
           				<div id="project_fields">
          
        				</div>
        				
        					<div class="col-sm-3 nopadding">
								<div class="form-group">
    								<input type="text" class="form-control" id="project_name" name="project_name[]" value="" placeholder="project name">
  								</div>
							</div>
							<div class="col-sm-3 nopadding">
  								<div class="form-group">
    								<input type="text" class="form-control" id="platform" name="platform[]" value="" placeholder="Platforms">
  								</div>
							</div>
							<div class="col-sm-3 nopadding">
  								<div class="form-group">
    								<input type="text" class="form-control" id="used" name="used[]" value="" placeholder="used">
  								</div>
							</div>
					      	<div class="input-group-btn">
        						<button class="btn btn-success" type="button"  onclick="project_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      						</div>
      						<div class="clear"></div>
					</div>
				</div>
        				
        				
        		
       		</div>
       		
       		
       		<div class="panel row">
            <label class="col-md-2 control-label" name="achievment">Achievment :</label>
            		   <div class="col-md-8">
                       <div id="achievment_fields">
          
        				</div>
        				
                    	<div class="col-sm-11 nopadding">
                    		<div class="input-group">
								<div class="form-group">
    								<input type="text" class="form-control" id="achievments" name="achievment[]" value="" placeholder="achievment">
  								</div>
						
								<div class="input-group-btn">
        								<button class="btn btn-success" type="button"  onclick="achievment_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      							</div>
      						</div>
      					</div>
      					<div class="clear_achiev"></div>
      					</div>
           				
       		</div>
       		
       		
       		<div class="panel row">
            	<label class="col-md-2 control-label" name="working">Working at :</label>
           				<div class="col-md-8">
                       		<div id="work_fields">
          
        					</div>
        					<div class="col-sm-7 nopadding">
								<div class="form-group">
    								<input type="text" class="form-control" id="work" name="work[]" value="" placeholder="working at ">
  								</div>
							</div>
        					<div class="col-sm-5 nopadding">
								<div class="form-group">
									<div class="input-group">
    									<input type="text" class="form-control" id="work" name="designation[]" value="" placeholder="designation">
  										<div class="input-group-btn">
        									<button class="btn btn-success" type="button"  onclick="work_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      									</div>
      								</div>
  								</div>
  								<div class="work_clear"></div>
							</div>
        					
        				</div>
       		</div>
       		<div class="panel row">
            	<label class="col-md-2 control-label" name="working">Work History :</label>
           				<div class="col-md-8">
                       		<div id="worked_fields">
          
        					</div>
        					<div class="col-sm-7 nopadding">
								<div class="form-group">
    								<input type="text" class="form-control" id="work" name="worked[]" value="" placeholder="worked at ">
  								</div>
							</div>
        					<div class="col-sm-5 nopadding">
								<div class="form-group">
									<div class="input-group">
    									<input type="text" class="form-control" id="worked" name="designation[]" value="" placeholder="designation">
  										<div class="input-group-btn">
        									<button class="btn btn-success" type="button"  onclick="worked_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
      									</div>
      								</div>
  								</div>
  								<div class="worked_clear"></div>
							</div>
        					
        				</div>
       		</div>
     <!--div class="panel">
	<label for="content"> Book Description </label>
	<TEXTAREA name="content" class="form-control"></TEXTAREA>
</div-->
<div class="panel-footer">
	<input type="submit" class="btn btn-success btn-lg btn-block" value="Save">
</div>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
@section('extrajs')
     <script type="text/javascript" src="{{ URL::asset('frontEnd/js/add_field.js') }}"></script>
     

@endsection

@endsection



    
    
    