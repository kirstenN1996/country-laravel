@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Section</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Country</th>
                    <th>Total Cases</th>
                    <th>New Cases</th>
                    <th>Total Deaths</th>
                    <th>New Deaths</th>
                    <th>Total Recovered</th>
                </tr>
            </thead>
            <tbody>
		    @foreach($data as $row)
                    <tr>
                        <td>{{ $row['country'] }}</td>
                        <td>{{ $row['total_cases'] }}</td>
                        <td>{{ $row['new_cases'] }}</td>
                        <td>{{ $row['total_deaths'] }}</td>
                        <td>{{ $row['new_deaths'] }}</td>
                        <td>{{ $row['total_recovered'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
