  <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Estimates 
                </div>
                <div class="panel-body">
                    @if($job->estimates)
                        <div class="table">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th><th>Description</th><th>Amount</th>
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
                        @endif
                        @if($job->status == 1)

                            <form action="/estimates" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="date"  value="2016-08-24">
                                <input type="hidden" name="description" value="{{ $job->description}}">
                                <input type="hidden" name="job_id" value="{{ $job->id}}">
                                <input type="hidden" name="house" value="{{ $job->house}}">
                                <input type="hidden" name="street" value="{{ $job->street}}">
                                <input type="hidden" name="town" value="{{ $job->town}}">
                                <input type="hidden" name="county" value="{{ $job->county}}">
                                <input type="hidden" name="postcode" value="{{ $job->postcode}}">
                                <input type="hidden" name="items" value="{{ $job->items}}">
                                <input type="hidden" name="materials" value="{{ $job->materials}}">
                                <input type="hidden" name="items_price" value="{{ $job->items_price}}">
                                <input type="hidden" name="items_price" value="{{ $job->materials_price}}">
                                <button class="btn btn-primary pull-right btn-sm">Create Estimate</button>
                            </form>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div> 