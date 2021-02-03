
@extends('layouts.home')
@section('content')
<section>
        <div class="container">
        <h1 class="text-center py-5">People Love Us</h1>
            @foreach ($items as $item)
            <div class="content ">
                <div class="row">
                    <div class="col-sm-3">
                    <img src="{{Storage::url($item->image)}}" alt="image" class="img-thumbnail mb-3" />
                    </div>
                    <div class="col-sm-9">
                    <h4 class="pb-5">{{$item->name}}</h4>
                    <p class="">{{$item->company}}</p>
                    </div>
                    <div class="col-sm-12">
                    <p class="">{{$item->text}}</p>
                    </div>
                </div>
            
            
                <hr>
            </div>

            @endforeach

        </div>
    </section>
    
@endsection
    
  