/* Calculator
*
* Convert JSON to inputs add them to a div with class json-inputs
*
*/

function jsonToInputs(json)
{
	var len = json.inputs.length
	$('#json-inputs').html('')

	for(i=0 ; i < len; i++)
	{
		$('#json-inputs').append("<input value='" + json.inputs[i] + "'>")
	}
} 

function inputsToJson()
{
  var inputArray = $('#json-inputs :input').serializeArray()
  
  return JSON.stringify(inputArray);
}