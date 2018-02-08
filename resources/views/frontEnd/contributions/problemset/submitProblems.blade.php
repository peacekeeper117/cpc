@extends('frontEnd.master')
@section('Active_submit_problem')
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
        
        	<form  action="{{url('/submit-problem-done')}}" method="post" enctype="multipart/form-data">
        	<div class="col-md-6">
        	{{csrf_field()}}
            		
                          <label>problem Name</label>
                          <input name="name" class="form-control" placeholder="i.e Charlie Dimension" />
              		
              				<br>
              				
                          <label>Time Limit(seconds)</label>
                          <input name="time_limit" class="form-control" placeholder="3.0"/>
              		<br>
              		
                          <label>Memory Limit(KB)</label>
                          <input name="memory_limit" class="form-control" placeholder="1024"/>
              		<br>
              		
                        <label>Name of Author</label>
                        <input name="author" class="form-control"  placeholder="If you collect from somewhere plz write Collected"></input>
              		<br>
              		
                        <label>Modified By</label>
                        <input name="modified_by" class="form-control"  placeholder="if you generate it keep it blank"></input>
              		
              		<br>
                        <label>Dataset Author</label>
                        <input name="dataset_author" class="form-control"  placeholder="plz try to give dataset along with the problem"></input>
              	<br>
            
        				<label> Type </label>
						<select class="selectpicker show-tick" data-size="10">
    								<option>Beginner</option>
    								<option>Intermediate</option>
    								<option>Hard</option>
    								<option>Unknown</option>
    								
    					</select>
    				
<br><br>
            
                        <label>Comment</label>
                        <textarea name="comment" class="form-control" rows="3" placeholder="i.e something..."></textarea>
<br>
		
		  <p>
      		<input type="submit" name="submit" value="Done" id="submit" class="btn btn-success btn-lg">
      		
    	</p> 
		</div>  
 
        <div class='col-md-6'>
               	
               	<label>Submit Description (pdf format)</label>
                <input class="form-control" id = "desc" name="desc" type="file"  >
				
               	
               	<label>Dataset-input (txt format)</label>
                <input class="form-control" name="input" type="file" >
				
               	
               	<label>Dataset-output (txt format)</label>
                <input class="form-control" name="output" type="file" >
				
		</div>
              

	</form>
        
	</div>
</div>



@endsection

