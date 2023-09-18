@extends('dashboard.layout')

@section('content')
    <h1>Penawaran Topik</h1>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul</th>
                <th>Dosen pembimbing</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($topics as $topic)
            <tr>
                <td>{{ $topic->id }}</td>
                <td>{{ $topic->judul }}</td>
                <td>{{ $topic->dosen }}</td>
                <td>{{ $topic->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
@endsection