
@extends('layouts.home')
@section('content')

<section>
        <div class="container">
            <h1 class="text-center pb-5">Keeping Up with HomeKeeper</h1>
            @foreach ($items as $item)
            <div class="content ">
                <h4 class="text-primary">{{$item->title}}</h4>
                <img src="{{Storage::url($item->image)}}" alt="image" style="width: 150px" class="img-thumbnail mb-3" />
                <p class="fst-italic">{{$item->text}}</p>
                <p class="fst-italic">Categories : {{$item->categories}}</p>
                <p class="fst-italic pb-3">Posted : {{$item->date}} By {{$item->author}}</p>
                <hr>
            </div>

            @endforeach

        </div>
    </section>
   
@endsection
    
    