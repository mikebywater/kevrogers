@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Estimate</div>

                <div class="panel-body">
                     {!! Form::open(['url' => 'estimates', 'class' => 'form-horizontal']) !!}

                                <div class="form-group {{ $errors->has('date') ? 'has-error' : ''}}">
                {!! Form::label('date', 'Date: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('date', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('description', $job->description, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('job_id') ? 'has-error' : ''}}">
                {!! Form::label('job_id', 'Job Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('job_id', $job->id, ['class' => 'form-control']) !!}
                    {!! $errors->first('job_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('house') ? 'has-error' : ''}}">
                {!! Form::label('house', 'House: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('house', $job->house, ['class' => 'form-control']) !!}
                    {!! $errors->first('house', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('street') ? 'has-error' : ''}}">
                {!! Form::label('street', 'Street: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('street',$job->street , ['class' => 'form-control']) !!}
                    {!! $errors->first('street', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('town') ? 'has-error' : ''}}">
                {!! Form::label('town', 'Town: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('town', $job->town, ['class' => 'form-control']) !!}
                    {!! $errors->first('town', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('county') ? 'has-error' : ''}}">
                {!! Form::label('county', 'County: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('county', $job->county, ['class' => 'form-control']) !!}
                    {!! $errors->first('county', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('postcode') ? 'has-error' : ''}}">
                {!! Form::label('postcode', 'Postcode: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('postcode', $job->postcode, ['class' => 'form-control']) !!}
                    {!! $errors->first('postcode', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('items') ? 'has-error' : ''}}">
                {!! Form::label('items', 'Items: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('items', $job->items, ['class' => 'form-control']) !!}
                    {!! $errors->first('items', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('materials') ? 'has-error' : ''}}">
                {!! Form::label('materials', 'Materials: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('materials', $job->materials, ['class' => 'form-control']) !!}
                    {!! $errors->first('materials', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('items_price') ? 'has-error' : ''}}">
                {!! Form::label('items_price', 'Items Price: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('items_price', $job->items_price, ['class' => 'form-control']) !!}
                    {!! $errors->first('items_price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('materials_price') ? 'has-error' : ''}}">
                {!! Form::label('materials_price', 'Materials Price: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('materials_price', $job->materials_price, ['class' => 'form-control']) !!}
                    {!! $errors->first('materials_price', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-3">
                            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection