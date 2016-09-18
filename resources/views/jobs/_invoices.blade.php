    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Invoice 
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
                            @foreach($job->invoices as $item)
                                {{-- */$x++;/* --}}
                                <tr>
                                    <td><a href="{{ url('invoices', $item->id) }}">{{ $item->date }}</a></td><td>{{ $item->description }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ url('invoices/create') }}" class="btn btn-primary pull-right btn-sm">Add New Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>