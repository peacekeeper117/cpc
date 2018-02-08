@extends('frontEnd.master')
@section('Active_standings')
 class="active-menu" 
@endsection
@section('home_desc')
			<div class="panel-body">
<<<<<<< HEAD
				<i>*Ranking is updated Hourly</i>
=======
			
>>>>>>> 9fd13aabbe941cd19f7ef5c0e6301c40fec4b7e6
               <div class="panel panel-default">
                        <div class="panel-heading">
                        <i> Session {{ Auth::user()->session }}</i>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr> 
                                        	<th>#</th>
                                            <th>Name (username)</th>
                                            <th>Codeforces Rank</th>
                                            <th>Codeforces Rating</th>

                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($obj as $list)
                                        <tr class="odd gradeX">
                                        	<td> {{$var++}}</td>
                                            <td> {{$list->name}} ({{$list->cf_handle}})</td>
                                            <td>{{$list->cf_level}}</td>
<<<<<<< HEAD
                                            <td>{{$list->cf_points }}</td>
=======
                                            <td>{{$list->cf_points *100 }}</td>
>>>>>>> 9fd13aabbe941cd19f7ef5c0e6301c40fec4b7e6
                                            <td class="center"></td>
                                        </tr>
                                   	@endforeach
                                    </tbody>
                                </table>
                            </div>
                      </div>
                     </div>
                    </div>
@endsection
                    