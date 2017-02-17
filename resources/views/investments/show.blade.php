@extends('layouts.home')
@section('content')

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/investments') }}">Investments</a></li>
            <li class="active">Read</li>
        </ol>

    <h1>Investment</h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Category</td>
                <td><?php echo ($investment['category']); ?></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><?php echo ($investment['description']); ?></td>
            </tr>
            <tr>
                <td>Acquired Value</td>
                <td><?php echo '$', ($investment['acquired_value']); ?></td>
            </tr>
            <tr>
                <td>Acquired Date</td>
                <td><?php echo ($investment['acquired_date']); ?></td>
            </tr>
            <tr>
                <td>Recent Value</td>
                <td><?php echo '$', ($investment['recent_value']); ?></td>
            </tr>
            <tr>
                <td>Recent Date</td>
                <td><?php echo ($investment['recent_date']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
@stop

