@extends('layouts.main')
@section('container')
    <h1>{{ $device['name'] }} ({{ $device['id'] }})</h1>

    @php
        $i = 1;
    @endphp
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Datetime</th>
                <th scope="col">Nilai Data</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dt)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <td>{{ $dt['created_at'] }}</td>
                    <td>{{ $dt['data'] }}</td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
        </tbody>
    </table>

    <a href="/devices">back to Devices</a>
@endsection
