@extends('layouts.app')

@section('title', 'products')

@section('content')
<div class="container">
    <div class="row my-5 justify-content-center">
        <div class="col-md-4">

            <form action="{{ route('PostProduct') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Your Product</label>
                    <input type="text" name="title" value="{{ old('name') }}" id=""
                        placeholder="Enter Your Product"
                        class="form-control w-200  @error('name') 
                is-invalid
            @enderror">
                    <label>Description</label>
                    <input type="text" name="description" value="{{ old('description') }}" id=""
                        placeholder="Description"
                        class="form-control w-200  @error('description') 
        is-invalid
    @enderror">
                    <label for="name">Start Date</label>
                    <input type="date" name="start_date" value="{{ old('start_date') }}" id=""
                        class="form-control w-200  @error('start_date') 
is-invalid
@enderror">
<label for="name">End Date</label>
<input type="date" name="end_date" value="{{ old('end_date') }}" id=""
                         class="form-control w-200  @error('end_date') 
is-invalid
@enderror">
<label for="name">Price</label>
<input type="text" name="price" value="{{ old('price') }}" id=""
                         placeholder="Enter the Price"
                         class="form-control w-200  @error('price') 
is-invalid
@enderror">
@error('price')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
<div class="form-group">
<button class="btn btn-dark w-100">VALIDATE</button>
</div>
</form>
        </div>
    </div>
</div>
