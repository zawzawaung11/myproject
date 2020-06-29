@extends("layout.app")
@section('title','Radio Pop Up')
@section('content')

<div class="container">

<div class="row justify-content-center">
<div class="col-md-12">
<table class="table table-bordered">

 <tbody>	<h3>Change Pop Up to mouse over</h3>	<p>Hi, please choose a type below:</p>  <form action="{{ action('FormatController@store') }}" method="POST" >  @csrf    <div class="radio">      <label><input type="radio" name="optradio" value="type 1"> <span id="type1">Type 1 </span></label>    </div>    <div class="radio">      <label><input type="radio" name="optradio" value="type 2"><span id="type2"> Type 2 </span></label>    </div>   <button type="submit" class="btn btn-primary">Save</button>  </form>
 </tbody>
 </table><div id="dialog" title="Type 1">  <p>This is Type 1.</p></div><div id="dialog2" title="Type 2">  <p>This is Type 2.</p></div>    <a href="/">Back</a>
</div>  
</div>
@endsection@section('extra-script')<script>  $( function() {    $( "#dialog" ).dialog({      autoOpen: false,    });     $( "#type1" ).on( "mouseover", function() {      $( "#dialog" ).dialog( "open" );    });			$( "#dialog2" ).dialog({      autoOpen: false,    });     $( "#type2" ).on( "mouseover", function() {      $( "#dialog2" ).dialog( "open" );    });		  } );</script>@endsection