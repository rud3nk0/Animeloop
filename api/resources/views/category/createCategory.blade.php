@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create new Category') }}</div>

                    <div class="card-body">
                        <form action="{{route("category.store")}}" method="post">
                            @csrf
                            <label for="name">Name Category</label>
                            <input type="text" name="name" id="name">
                            <input type="submit" value="Create">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
