<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Labour</div>

        <div class="panel-body">
            <h4>Walls</h4>

            <table class="table table-striped">
                <tr>
                    <th>Type</th>
                    <th>Height</th>
                    <th>Width</th>
                    <th style="width:100px">Time</th>
                </tr>
                <tr v-for="wall in items.walls">
                    <td>@{{wall.type}}</td>
                    <td>@{{wall.height}}</td>
                    <td>@{{wall.width}}</td>
                    <td></td>
                </tr>
            </table>

            <h4>Doors</h4>

            <table class="table table-striped">
                <tr>
                    <th>Type</th>
                    <th style="width:100px">Time</th>
                </tr>
                <tr v-for="door in items.doors">
                    <td>@{{door.type}}</td>
                    <td></td>
                </tr>
            </table>


        </div>

    </div>
</div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Tasks</div>

        <div class="panel-body">
            <h4>Walls / Ceilings</h4>
            <select id = "wall-type">
                <option selected>Paper Wall</option>
                <option>Paint Wall</option>
                <option>Ceiling</option>


            </select>
            <select id = "wall-type">
                <option selected>Living Room</option>
                <option>Bedroom</option>
                <option>Dining Room</option>


            </select>
            <input style="width:50px;" type = "number" id = "wall-height">
            <input style="width:50px;" type = "number" id = "wall-width">
            <button class="btn btn-primary btn-xs" v-on:click="addWall">Add Wall Task</button>

            <h4>Doors</h4>
            <select id = "door-type">
                <option selected>Sand Door</option>
                <option>Paint Door</option>
            </select>
            <button class="btn btn-primary btn-xs" v-on:click="addDoor">Add Door Task</button>

        </div>


    </div>
