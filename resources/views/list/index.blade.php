@extends("layout.app")
@section('title','Home Page')
@section('content')

<div class="container"><h3>Listing Record</h3>

<div class="row justify-content-center">
<div class="col-md-12">
  <table class="table table-bordered">
    <thead>
      <tr>
	    <th>ID</th>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>	
@if(count($data) > 0)	
	@foreach ($data as $list)
    <tr>
	<td>		{{$list->id}}
	</td>
	<td>		{{$list->name}}
	</td>

	</tr>
	@endforeach
@else
    <tr>
	<td colspan="7">
	<div class="alert alert-danger" align="center">
	No Record Found !
	</div>
	</td>	
	</tr>
@endif	

 </tbody>
 </table>
  {{$data->links()}}     <a href="/">Back</a>
</div>  
</div>
@endsection