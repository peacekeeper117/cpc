@extends('frontEnd.master')
@section('Active_contestlist')
 class="active-menu" 
@endsection


@section('home_desc')

<div class="panel-body">
	@foreach($obj as $list)
	   @if(!strcmp($list->host,"Codeforces"))
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">{{$list->host}}</h3>
          </div>
          <div class="panel-body">
            {{$list->name}}</br>
            Duration : {{$list->duration/60}} Minutes</br>
            Date: @for($i=0;$i<10;$i++){{$list->time[$i]}}@endfor
            (YYYY-MM-DD)  </br>
            Time: @for($i=10;$i<19;$i++){{$list->time[$i]}}@endfor
             (UTC+6) </br>
            Status: {{$list->phase}}</br>
          </div>
        </div>
       @endif
       @if(!strcmp($list->host,"Devskill"))
               <div class="panel panel-success">
          <div class="panel-heading">
            <h3 class="panel-title">{{$list->host}}</h3>
          </div>
          <div class="panel-body">
            {{$list->name}}</br>
            Duration : Unknown </br>
            Date-TIme: {{$list->time}}
            Status: {{$list->phase}}</br>
          </div>
        </div>
       @endif
	@endforeach
</div>


@endsection
