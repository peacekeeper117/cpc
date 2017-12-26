@extends('layouts.app')

@section('content')
<div class="row">
	
<div class="col-md-6 col-md-offset-3">

<div class="panel panel-default">
	<div class="panel-heading">
		<h1>Upload a book</h1>
		</div>
<div class="panel-body">

<form method="POST" action="/editprof/{{$prof->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
{{method_field('PUT')}}
	<div class="form-group">
		<div class="panel row">
            <label class="col-md-4 control-label" name="resume">dev :</label>
            
                <input  type="text" id="dev_id" name="dev_id" value="{{ $prof->dev_id }}"/>
            </div>
                       
            <div class="panel row">
            <label class="col-md-4 control-label" name="resume">uva:</label>
           <input  type="text" id="uva_id" name="uva_id" value="{{ $prof->uva_id }}"/>
       		</div>
       		<div class="panel row">
            <label class="col-md-4 control-label" name="resume">cf:</label>
           <input  type="text" id="cf_handle" name="cf_handle" value="{{ $prof->cf_handle }}"/>
       		</div>

     <!--div class="panel">
	<label for="content"> Book Description </label>
	<TEXTAREA name="content" class="form-control"></TEXTAREA>
</div-->
<div class="panel-footer">
	<input type="submit" class="btn btn-success btn-lg btn-block" value="Upload">
</div>
</form>
	
</div>
</div>

</div>
	

</div>

</div>
@endsection