@extends('frontEnd.master')
@section('Active_exstudent')
 class="active-menu" 
@endsection
@section('home_desc')
			<div class="panel-body">
			
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
                                            <th>Username</th>
                                            <th>Codeforces Points</th>
                                            <th>UVA(points)</th>
                                            <th>Total Points</th>
                      
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($obj as $list)
                                        <tr class="odd gradeX">
                                        	<td> {{$var++}}</td>
                                            <td> {{$list->name}}</td>
                                            <td>{{$list->cf_points}}</td>
                                            <td>{{$list->uva_points}}</td>
                                            <td>{{$list->total_points}}</td>
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
                    