/* Calculator
*
* Convert JSON to inputs add them to a div with class json-inputs
*
*/

function jsonToInputs(json)
{
	
	json = JSON.parse(json)
	var len = json.length
	$('#json-inputs').html('')

	for(i=0 ; i < len; i++)
	{
		$('#json-inputs').append("<input value='" + json[i].value + "' name = '" + json[i].name +  "' placeholder='" + json[i].name + "'><br>")
	}
} 

function inputsToJson()
{

  var inputArray = $('#json-inputs :input').map(function()
   {
	  return {
	    name: $(this).attr('name'),
	    value: $(this).val(),
	    type: $(this).data('type')
	  }
	}).get();

  return JSON.stringify(inputArray);

}


function createInput(name,type)
{
	$('#json-inputs').append("<input value='' name = '" + name +  "' placeholder='" + name + "'><br>")	
}

/**
 * Always focus on input
 */

$('form:first *:input[type!=hidden]:first').focus();