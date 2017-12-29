@extends('frontEnd.master')
@section('Active_curated')
 class="active-menu" 
@endsection
@section('datepicker')
  
  <link href="{{asset('frontEnd/css/select/bootstrap-select.css')}}" rel="stylesheet" />
  <link href="{{asset('frontEnd/css/select/bootstrap-select.min.css')}}" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  


@endsection
@section('home_desc')
<div class="panel-body">
<h3>{{Session::get('message')}}</h3>
    <div class="row">
        <div class="col-md-6">
        	<form  action="{{url('/set-curated-contest')}}" method="post">
        	{{csrf_field()}}
        			<div class= "form-group">
        				<label> Type </label>
						<select class="selectpicker show-tick" data-size="10">
								<optgroup label="Standard Contest">
    								<option>Codeforces</option>
    								<option>Codechef</option>
                                  	<option>Devskill</option>
                                  	<option>Hackerrank</option>
                                  	<option>Hackerearth</option>
                                </optgroup>
                              	<optgroup label="Curated Contest">
                              		<option>Vjudge</option>
                              		<option>Hackerearth</option>
                              	</optgroup>
                              	<optgroup label="International Contest">
                              		<option>ICPC</option>
                              		<option>Facebook HackerCup</option>
                              		<option>Google Codejam</option>
                              	</optgroup>
                              	<optgroup label="Local/Fest/National Contest">
                              	<option>NCPC</option>
                              	<option>Other</option>
                              	</optgroup>
                              	
						  </select>
        			
        			</div>
            		<div class="form-group">
                          <label>Contest Name</label>
                          <input name="name" class="form-control" placeholder="i.e WARMUP-1" />
              		</div>
              		<div class="form-group">
                          <label>Maximum Recquired Session</label>
                          <input name="session" class="form-control" placeholder="i.e 2014-15 or all"/>
              		</div>
              		<div class="form-group">
                        <label>Description</label>
                        <textarea name="desc" class="form-control" rows="3" placeholder="i.e Selection Contest for NCPC 20XX"></textarea>
              		</div>
              		<div class="form-group">
                          <label>Password/Passkey</label>
                          <input name="passkey" class="form-control" placeholder="provide a password for HUST/Vjudge Contest"/>
              		</div>
           			<div class="form-group">
                          <label>URL</label>
                          <input name="url" class="form-control" placeholder="i.e http://www.vjudge...."/>
            		</div>
        <p>
      		<input type="submit" name="submit" value="Done" id="submit" class="btn btn-success btn-lg">
      		
    	</p>
		</div>    
        <div class='col-md-6'>
        		<div class='col-md-6'>
          			<div class="form-group">
                  		<label>Date</label>
            			<input name="date" class="date form-control" type="text" placeholder="Contest Date">
          				<script type="text/javascript">                
                            $('.date').datepicker({                
                               format: 'yyyy-mm-dd'
                             });  
        				</script>
					</div>  
          		</div>
          		<div class='col-md-6'>
          		<div class="form-group">
                  		<label>Starting Time</label>
           				<input name="time" class="timepicker form-control" type="text">
                        <script type="text/javascript">
                        
                            $('.timepicker').datetimepicker({
                        
                                format: 'HH:mm:ss'
                        
                            }); 
                
                		</script>  
		  		</div>
		  		</div>
		  		<div class="form-group">
                          <label>Duration</label>
                          <input name="duration" class="form-control" placeholder="i.e 4" />
              	</div>

		</div>

				</form>
        
	</div>
</div>




@endsection