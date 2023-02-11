@extends('layout')
@section('title', 'Show')
@section('content')

    <div class="container">
        <h1>Computers</h1>
        <p>This is the computer page.</p>

      
        <a href=""></a>
        <table>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
                <th>Model</th>
            </tr>
            <tr>
                <td>{{ $data['id'] }}</td>
                <td>{{ $data['name'] }}</td>
                <td>{{ $data['price'] }}$</td>
                <td>{{ $data['model'] }}</td>
            </tr>
        </table>
        <div class="absolute">
            <a href="{{ route('computers.edit', $data['id']) }}"> 
                <button>Edit Computer</button>
            </a>
        </div>
        <div class="absolute">
            <form action="{{ route('computers.destroy', $data['id']) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete">
            </form>
        </div>
        
    </div>

@endsection