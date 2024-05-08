@extends('layouts.main')
@section('container')
    <h1>Devices</h1>
    @php
        $i = 1;
    @endphp

    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th,
        .table td {
            border: 1px solid #30a33967;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #ffe600;
        }
        body {
        background-color: rgba(47, 206, 255, 0.76); /* Warna kuning kehijauan dengan transparansi setengah dalam format RGBA */
    }
    </style>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Device Name</th>
                <th scope="col">Minimum Value</th>
                <th scope="col">Maximum Value</th>
                <th scope="col">Current Value</th>
            </tr>
        </thead>
        <tbody>
                @foreach($devices as $device)
                <tr>
                    <td>{{ $i }}</td>
                    <td>
                        <a href="/devices/{{ $device["id"] }}">{{ $device["id"] }}</a>
                    </td>
                    <td>{{ $device["device_name"] }}</td>
                    <td>{{ $device["min_value"] }}</td>
                    <td>{{ $device["max_value"] }}</td>
                    <td>{{ $device["current_value"] }}</td>
                </tr>
                @php
                    $i++;
                @endphp
                @endforeach

        </tbody>
    </table>
@endsection
