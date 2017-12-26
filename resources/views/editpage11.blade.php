
<h1>{{$prof->id}}</h1>
<form method="POST" action="/editprof/{{$prof->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
{{method_field('PUT')}}
<div class="col-md-8 card"> 
<div class="col-md-6">
	<label for="cf_handle" class="col-md-4 control-label">CF handle {{$prof->name}}</label>
	<div class="col-md-6">
        {{ csrf_field() }}
         <input id="cf_handle" type="text" class="form-control" name="cf_handle" value="{{ $prof->cf_handle }}" autofocus>

                                @if ($errors->has('cf_handle'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cf_handle') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dev_id') ? ' has-error' : '' }}">
                            <label for="dev_id" class="col-md-4 control-label">Devskill Id</label>

                            <div class="col-md-6">
                                {{ csrf_field() }}
                                <input id="dev_id" type="text" class="form-control" name="dev_id" value="{{ $prof->dev_id }}" >

                                @if ($errors->has('dev_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dev_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('uva_id') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">UVA ID</label>

                            <div class="col-md-6">
                                {{ csrf_field() }}
                                <input id="uva_id" type="text" class="form-control" name="uva_id" value="{{ $prof->uva_id }}">

                                @if ($errors->has('uva_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('uva_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{ csrf_field() }}
                        </div>
                        {{ csrf_field() }}
                        	<input type="submit" class="btn btn-success btn-lg btn-block" value="Save">

                    </div>

                </form>