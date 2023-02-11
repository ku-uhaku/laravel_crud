@extends('layout')
@section('title', 'Edit')
@section('content')

    <div class="container">
        <h1>Computers</h1>
        <p>This is the edit computer page.</p>
        <fieldset>
            <form action="{{ route('computers.update', ["computer" => $data['id']]) }}" method="post">
                @csrf 
                @method('PUT')
                <div>
                    <label for="name">Name</label><br>
                    <input type="text" name="name" id="name" value="{{ $data['name'] }}">
                    <p class="error">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <br>
                <div>
                    <label for="price">Price</label><br>
                    <input type="text" name="price" id="price" value="{{ $data['price'] }}">
                    <p class="error">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <br>
                <div>
                    <label for="model">Model</label><br>
                    <input type="text" name="model" id="model" value="{{ $data['model'] }}">
                    <p class="error">
                        @error('model')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <br>
                <input type="submit" value="Add">
            </form>
        </fieldset>
    </div>

    
@endsection