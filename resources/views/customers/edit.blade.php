@extends('layouts.home')
@section('content')

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/customers') }}">Customers</a></li>
            <li class="active">Edit</li>
        </ol>


    <h1>Update Customer</h1>
    {!! Form::model($customer,['method' => 'PATCH','route'=>['customers.update',$customer->id]]) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cust_number', 'Cust Number') !!}
        {!! Form::text('cust_number',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('address', 'Street Address:') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('city', 'City:') !!}
        {!! Form::text('city',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('state', 'State:') !!}
        {!! Form::text('state',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('zip', 'Zip:') !!}
        {!! Form::text('zip',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'Primary Email:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('home_phone', 'Home Phone:') !!}
        {!! Form::text('home_phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('cell_phone', 'Cell Phone:') !!}
        {!! Form::text('cell_phone',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}

    </div>
@stop
