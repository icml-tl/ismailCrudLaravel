@extends('layouts.app')
@section('title', 'category')

@section('content')
<div class="container">
    <div class="row my-5 justify-content-center">
        <div class="col-md-4">
            
            <form action="{{route('PostCategory')}}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Your Category</label>
                    <input type="text" name="name" value="{{old('name')}}" id="" placeholder="category....." class="form-control w-200 @error('name') 
                    is-invalid
                @enderror" 
                    >
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-dark w-100">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
