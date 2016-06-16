new Vue({
  	el: '#app',
	data:
	{
		items: items
	},
    methods:
    {
        addWall: function()
        {
        	this.items.walls.push(JSON.parse('{"type": "' + $("#wall-type").val() + '","height": "' + $("#wall-height").val() + '","width": "' + $("#wall-width").val() + '"}'));

		},
        addDoor: function()
        {
        	this.items.doors.push(JSON.parse('{"type": "' + $("#door-type").val()  + '"}'));
        	

		}
		

    }
})