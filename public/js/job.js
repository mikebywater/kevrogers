var times = JSON.parse('{"times": {	"walls": { "Paper": "0.35555","Paint": "0.1666","Ceiling": "0.209"},"doors": {	"Varnish": "0.666",	"Burning": "1","Gloss": "0.6666","Stain-and-Varnish": "1","Satin": "1"},"skirting": "0.2222","windows": {"paint": "0.6666","prime-and-paint": "1"},"bannister": "0.0833"}}')

new Vue({
  	el: '#app',
	data:
	{
		items: items,
        itemString : JSON.stringify(this.items),
		times: times.times,
		totalTime: totalTime
	},
	watch: {
		items: {
			handler: function (val, oldVal) {
				this.totalTime = this.sumItemsTime(this.items);
			},
			deep: true
		}
	},
    methods:
    {
        addWall: function()
        {

        	var height  = $("#wall-height").val();
        	var width = $("#wall-width").val();
			var type = $("#wall-type").val();
        	var time = this.times.walls[type] * height * width;

        	this.items.walls.push(JSON.parse('{"type": "' + type + '","height": "' + height + '","width": "' + width + '", "time" : "' + time +'"}'));
            this.itemString = JSON.stringify(this.items)
		},
        addDoor: function()
        {
			var type = $("#door-type").val();
			var time = this.times.doors[type];

        	this.items.doors.push(JSON.parse('{"type": "' + type  + '", "time" : "' +  time +   '"}'));
        	this.itemString = JSON.stringify(this.items)

		},
		sumItemsTime: function(items)
		{
			var totalTime = 0;
			types = ['walls' , 'doors'];
			for(var x=0; x < types.length; x++)
			{
				type = types[x];
				itemsLen = items[type].length;
				for(var i = 0 ; i < itemsLen; i ++)
				{
					if(items[type][i].time)
					{
						totalTime =  +parseFloat(totalTime).toFixed(2) + +parseFloat(items[type][i].time).toFixed(2);
					}
				}
			}
			return +parseFloat(totalTime).toFixed(2);

		}.bind(this)
		

    }
});