@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Peopleloveus</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Peopleloveus</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title ">List Peopleloveus</h3>
                            <a href="{{ route('peopleloveus.create') }}" class="btn btn-primary">Create</a>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"></div>
                                <div class="col-sm-12 col-md-6"></div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">image</th>
                                                <th scope="col">name</th>
                                                <th scope="col">company</th>
                                                <th scope="col">text</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($items as $no => $item)
                                            <tr>
                                                <th scope="row">{{$no+1}}</th>
                                                <td>
                                                    <img src="{{Storage::url($item->image)}}" alt="image"
                                                        style="width: 150px" class="img-thumbnail" />
                                                </td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->company}}</td>
                                                <td>{{$item->text}}</td>

                                                <td>
                                                    <div class="text-right">
                                                        <a href="{{ route('peopleloveus.edit', $item->id) }}"
                                                            class="btn btn-warning">
                                                            <i class="fas fa-edit fa-sm text-white-60"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a
                                                            onclick="return confirm('Yakin untuk menghapus peopleloveus {{$item->title}}? ')">
                                                            <form action="{{ route('peopleloveus.destroy', $item->id) }}"
                                                                method="post" class="d-inline">
                                                                @csrf
                                                                @method('delete')
                                                                <button class="btn btn-danger">
                                                                    <i class="fas fa-fw fa-trash"></i>
                                                                    <span>Delete</span>
                                                                </button>
                                                            </form>
                                                    </div>
                                                </td>

                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" class="text-center">Data Belum Ada</td>
                                            </tr>
                                            @endforelse


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


            </div>
            <!-- /.col -->
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- /.content -->

@endsection