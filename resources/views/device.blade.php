@extends('layouts.main')
@section('container')
    <h1>{{ $device["device_name"]}}</h1>
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
                <th scope="col">DateTime</th>
                <th scope="col">Data</th>
            </tr>
        </thead>
        <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $d["created_at"] }}</td>
                    <td>{{ $d["data"] }}</td>
                </tr>
                @php
                    $i++;
                @endphp
                @endforeach

        </tbody>
    </table>
<a href="/devices">Back to Devices</a>
@endsection
