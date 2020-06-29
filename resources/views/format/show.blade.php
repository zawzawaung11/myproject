@extends("layout.app")
@section('title','Radio Pop Up')
@section('content')

<div class="container">

<div class="row justify-content-center">
<div class="col-md-12">
<table class="table table-bordered">

 <tbody>		<p>You choose {{$data}}</p>
 </tbody>
 </table>   <a href="/">Back</a>
</div>  
</div>
@endsection