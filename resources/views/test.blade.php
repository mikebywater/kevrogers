@extends('layouts.app')

@section('content')


<div id="json-inputs">
	<input name="test">

</div>
<button id="input-flip">Click</button>

<script>

$(document).ready(function()
{

	$('#input-flip').click(function()
	{
		var json = inputsToJson();
		console.log(json)
	});

});
</script>

@endsection