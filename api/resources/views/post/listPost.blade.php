@extends('layouts.app')

@section('content')
    <button type="button" class="modal_btn" data-bs-toggle="modal"
            data-bs-target="#modal-form-create">+&nbsp; New Post
    </button>
    <div class="modal fade" id="modal-form-create" tabindex="-1" role="dialog" aria-labelledby="modal-form-create"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">CREATE NEW POST</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                           aria-label="Name" aria-describedby="name-addon">
                                </div>

                                <label for="description">Description</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="description" id="description" class="form-control" placeholder="Description"
                                           aria-label="Description" aria-describedby="name-addon">
                                </div>

                                <label for="category_id">Category Id</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="category_id" id="category_id" class="form-control" placeholder="Category Id"
                                           aria-label="Category Id" aria-describedby="name-addon">
                                </div>

                                <label for="inputImage">Photo</label>
                                <div class="input-group mb-3">
                                    <input type="file" name="image" id="inputImage" class="form-control"
                                           aria-label="inputImage">
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">
                                        Create
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Image</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Category Id</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->image}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->category_id}}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="trigger-editButton-modal" data-bs-toggle="modal" data-bs-target="#modal-form-edit-{{ $post->id }}" data-id="{{ $post->id }}">
                        Edit
                    </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-form-edit-{{ $post->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Post</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route("post.update", ['id'=>$post->id])}}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <label for="name">Name</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="name" value="{{ old('name', $post->name) }}" id="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
                                            </div>

                                            <label for="description">Description</label>
                                            <div class="input-group">
                                                <textarea type="text" name="description" id="description" class="form-control" placeholder="Description" aria-label="Description" aria-describedby="Description-addon">{{ old('description', $post->description) }}</textarea>
                                            </div>

                                            <label for="inputImage">Photo</label>
                                            <div class="input-group mb-3">
                                                <input type="file" name="image" value="{{ old('image', $post->image) }}" id="inputImage" class="form-control"
                                                       aria-label="inputImage">
                                            </div>

                                            <label for="category_id">Category Id</label>
                                            <div class="input-group mb-3">
                                                <input type="text" name="category_id" value="{{ old('category_id', $post->category_id) }}" id="category_id" class="form-control" placeholder="Category Id" aria-label="Category Id" aria-describedby="category_id-addon">
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="button-in-modal">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <form action="{{route("post.destroy", ['id'=>$post->id])}}"
                        method="post">
                        @csrf
                        @method('delete')
                        <input class="trigger-deleteButton-modal" type="submit" value="delete">
                    </form>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <style>
        .table{
            --bs-table-bg: rgba(0, 0, 0, 0.80)!important;
        }
        th{
            color: #fff!important;
        }
        td{
            color: #9f9f9f !important;
        }
        .modal_btn{
            border-radius: 8px;
            border: 2px solid #F5CF49;
            background: none;
            color: #fff;
        }
        .modal_btn:hover{
            border: 2px solid #A958A5;
        }
        .button-in-modal{
            width: 450px;
            height: 50px;
            border-radius: 8px;
            border: 2px solid #F5CF49;
            background: none;
            color: #000;
        }

        .button-in-modal:hover{
            border: 2px solid #A958A5;
        }

        .trigger-editButton-modal,
        .trigger-deleteButton-modal{
            margin-top: 10px;
            width: 100px;
            border-radius: 8px;
            border: 2px solid #F5CF49;
            background: none;
            color: #fff;
        }

        .trigger-editButton-modal:hover,
        .trigger-deleteButton-modal:hover{
            border: 2px solid #A958A5;
        }
    </style>
@endsection

