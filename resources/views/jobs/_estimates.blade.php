  <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Estimates 
                </div>
                <div class="panel-body">
                    <div class="table">
                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th><th>Description</th><th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {{-- */$x=0;/* --}}
                            @foreach($job->estimates as $item)
                                {{-- */$x++;/* --}}
                                <tr>
                                    <td><a href="{{ url('estimates', $item->id) }}">{{ $item->date }}</a></td><td>{{ $item->description }}</td><td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    <a href="{{ url('estimates/create?job=' . $job->id) }}" class="btn btn-primary pull-right btn-sm">Create Estimate</a> 
                    </div>
                </div>
            </div>
        </div>
    </div> 