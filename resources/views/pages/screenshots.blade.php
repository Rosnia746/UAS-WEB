
@extends('layouts.home')
@section('content')

<section>
        <div class="container">
        <h1 class="text-center py-5" >Screenshots</h1>
            @foreach ($items as $item)
            <div class="content ">
            
                <div class="row">
                    <div class="col-sm-6">
                    <img src="{{Storage::url($item->image)}}" alt="image" class="img-thumbnail mb-3" />
                    </div>
                    <div class="col-sm-6">
                    <h4 class="text-center pb-5">{{$item->title}}</h4>
                    <p class="">{{$item->text}}</p>
                    </div>
                </div>
            
            
                <hr>
            </div>

            @endforeach

        </div>
    </section>
   
@endsection
    
  