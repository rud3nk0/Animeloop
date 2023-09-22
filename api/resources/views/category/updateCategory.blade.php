@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit a Category') }}</div>

                    <div class="card-body">
                        <form action="{{route("category.update", ['id'=>$category->id])}}" method="post">
                            @csrf
                            @method('put')
                            <label for="name">Name Category</label>
                            <input type="text" name="name" id="name" value="{{$category->name}}">
                            <input type="submit" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
