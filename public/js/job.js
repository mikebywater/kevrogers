new Vue({
  	el: '#app',
	data:
	{
		items: items,
        itemString : JSON.stringify(this.items)
	},
    methods:
    {
        addWall: function()
        {
        	this.items.walls.push(JSON.parse('{"type": "' + $("#wall-type").val() + '","height": "' + $("#wall-height").val() + '","width": "' + $("#wall-width").val() + '"}'));
            this.itemString = JSON.stringify(this.items)
		},
        addDoor: function()
        {
        	this.items.doors.push(JSON.parse('{"type": "' + $("#door-type").val()  + '"}'));
        	this.itemString = JSON.stringify(this.items)

		}
		

    }
})