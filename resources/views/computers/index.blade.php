@extends('layout')
@section('title', 'Computers')
@section('content')

    <div class="container">
        <h1>Computers</h1>
        <p>This is the computers page.</p>
        @if (count($data) > 0)
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Model</th>
            </tr>
            @foreach ($data as $computer)
                <tr>
                    <td>{{ $computer['id'] }}</td>
                    <td>
                        <a href="{{ route('computers.show', ["computer"=> $computer['id']]) }}">
                           {{ $computer['name'] }} 
                        </a>
                    </td>
                    <td>{{ $computer['price'] }}</td>
                    <td>{{ $computer['model'] }}</td>
                </tr>
            @endforeach
        </table>
        @else
            <p class="not-found">No computers found.</p>
        @endif

        <div class="absolute">
            <a href="{{ route('computers.create') }}">
                <button>Add Computer</button>
            </a>
        </div>
    </div>

@endsection