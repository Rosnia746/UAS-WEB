
@extends('layouts.home')
@section('content')
<section>
        <div class="container">
            @foreach ($items as $item)
            <div class="content ">
            <h1 class="text-center pb-5">{{$item->title}}</h1>
                <div class="row">
                    <div class="col-sm-8">
                    <p class="">{{$item->text}}</p>
                    </div>
                    <div class="col-sm-4">
                    <img src="{{Storage::url($item->image)}}" alt="image" class="img-thumbnail mb-3" />
                    </div>
                </div>
                <hr>
            </div>

            @endforeach

        </div>
    </section>
@endsection
    
    