@extends('layout')
@section('title', 'Create')
@section('content')

    <div class="container">
        <h1>Computers</h1>
        <p>This is the create computer page.</p>
        <fieldset>
            <form action="{{ route('computers.store') }}" method="post">
                @csrf
                <div>
                    <label for="name">Name</label><br>
                    <input type="text" name="name" id="name" value="{{ old('name') }}">
                    <p class="error">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <br>
                <div>
                    <label for="price">Price</label><br>
                    <input type="text" name="price" id="price" value="{{ old('price') }}">
                    <p class="error">
                        @error('price')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <br>
                <div>
                    <label for="model">Model</label><br>
                    <input type="text" name="model" id="model" value="{{ old('model') }}">
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