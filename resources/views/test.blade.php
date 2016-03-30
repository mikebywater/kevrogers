@extends('layouts.app')

@section('content')


<div id="json-inputs">
	<input name="wall1" placeholder="wall1" data-type="wall"><br>
	<input name="wall2" placeholder="wall2" data-type="wall"><br>
	<input name="age" placeholder="age"><br>

</div>
<button id="input2json">convert to json</button>
<button id="json2input">convert to inputs</button>
<button id="createInput">create input</button>

<script>

$(document).ready(function()
{

	var json = ""

	$('#input2json').click(function()
	{
		json = inputsToJson();
		$('#json-inputs').html('')
		console.log(json)
	});

	$('#json2input').click(function()
	{
		jsonToInputs(json);
	});

	$('#createInput').click(function()
	{
		createInput("wall-1","wall");
	});

});
</script>

@endsection