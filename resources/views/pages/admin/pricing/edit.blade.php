@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Pricing</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pricing</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Edit Pricing</h3>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('pricing.update', $item->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title"
                            value="{{$item->title}}">
                    </div>
                    <div class="form-group">
                        <label for="text">Text</label>
                        <textarea name="text" id="text" rows="5" class="form-control">{{$item->text}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="onboardingfee">Onboarding Fee</label>
                        <input type="number" name="onboardingfee" class="form-control" id="onboardingfee" placeholder="Enter Onboarding Fee" value="{{$item->onboardingfee}}">
                    </div>
                    <div class="form-group">
                        <label for="annualfee">Annual Fee</label>
                        <input type="number" name="annualfee" class="form-control" id="annualfee" placeholder="Enter Annual Fee" value="{{$item->annualfee}}">
                    </div>
                    
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- /.content -->

@endsection
