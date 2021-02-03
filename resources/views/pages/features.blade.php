@extends('layouts.home')
@section('content')
<section>
        <div class="container">
            @foreach ($items as $item)
            <div class="content ">
            <h1 class="text-center pb-5">{{$item->title}}</h1>
                <img src="{{Storage::url($item->image)}}" alt="image" class="img-thumbnail mb-3" />
                <p class="">{{$item->text}}</p>
                <hr>
            </div>

            @endforeach

        </div>
</section>
@endsection
    
    