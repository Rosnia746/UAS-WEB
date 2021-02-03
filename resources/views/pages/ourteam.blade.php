
@extends('layouts.home')
@section('content')

<section>
        <div class="container">
        <h1 class="text-center py-5">Our Team</h1>
            @foreach ($items as $item)
            <div class="content ">
                <div class="row py-3">
                    <div class="col-sm-2">
                    <img src="{{Storage::url($item->image)}}" alt="image" class="img-thumbnail img-team mb-3" />
                    </div>
                    <div class="col-sm-10">
                    <h4 class="">{{$item->name}}</h4>
                    <h4 class="">{{$item->job_position}}</h4>
                    <h4 class="">{{$item->email}}</h4>
                    </div>
                    <div class="col-sm-12">
                    <p>{{$item->about}}</p>
                    </div>
                </div>
                <hr>
            </div>

            @endforeach

        </div>
    </section>
    
@endsection
    
    