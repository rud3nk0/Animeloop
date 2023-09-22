@extends('layouts.app')

@section('content')
    <button type="button" class="modal_btn" data-bs-toggle="modal"
            data-bs-target="#modal-form-create">+&nbsp; New Category
    </button>
    <div class="modal fade" id="modal-form-create" tabindex="-1" role="dialog" aria-labelledby="modal-form-create"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card card-plain">
                        <div class="card-header pb-0 text-left">
                            <h3 class="font-weight-bolder text-info text-gradient">CREATE NEW CATEGORY</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <label for="name">Name</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                           aria-label="Name" aria-describedby="name-addon">
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
            <th scope="col">Name</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <!-- Button trigger modal -->
                    <button type="button" class="trigger-editButton-modal" data-bs-toggle="modal" data-bs-target="#modal-form-edit-{{ $category->id }}" data-id="{{ $category->id }}">
                        Edit
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modal-form-edit-{{ $category->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Post</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{route("category.update", ['id'=>$category->id])}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <label for="name">Name</label>
                                        <div class="input-group mb-3">
                                            <input type="text" name="name" value="{{ old('name', $category->name) }}" id="name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="name-addon">
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="button-in-modal">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <form action="{{route("category.destroy", ['id'=>$category->id])}}"
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
