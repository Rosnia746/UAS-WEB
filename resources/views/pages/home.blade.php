@extends('layouts.home')
@section('content')
<section class="dua mb-5">
        <div class="container">
            <div class="row pb-5">
                @foreach($about as $item)
                <div class="col-sm-6">
                    <h1 class="title text-center pb-5">{{$item->title}}</h1>
                    <p>{{$item->text}}</p>
                    <a href="" class="btn">LEARN MORE</a>
                </div>
                <div class="col-sm-6">
                    <img src="{{Storage::url($item->image)}}" alt="" class="img w-100">
                </div>
                @endforeach
            </div>
            <hr>
        </div>
    </section>
    <section class="tiga py-5">
        <div class="container">
            <div class="row">
            @foreach($about2 as $item)
                <div class="col-sm-6">
                    <img src="{{Storage::url($item->image)}}" alt="" class="img w-100">
                </div>
                <div class="col-sm-6">
                    <h1 class="title text-center pb-5">{{$item->title}}</h1>
                    <p>{{$item->text}}</p>
                    <a href="" class="btn">LEARN MORE</a>
                </div>
            @endforeach
            </div>
            <hr>
        </div>
    </section>
    <section class="empat py-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center">FEATURES</h1>
                @foreach($features as $item)
                <div class="col-sm-6">
                    <div class="content">
                        <img src="{{Storage::url($item->image)}}" alt="" class="img">
                        <p>{{$item->text}}</p>
                    </div>
                </div>
                @endforeach
            </div>
    </section>
    <section class="lima py-5">
        <div class="container">
            <div class="title text-center pb-5">
                <h1>People Love Us</h1>
                <p>Our users are pretty with Homekeeper But dont just take our word for it. Read on and learn what they
                    have
                    to say</p>
            </div>
            <div class="row">
            @foreach($peopleloveus as $item)
                <div class="col-sm-6">
                <img src="{{Storage::url($item->image)}}" alt="" class="img">
                    <p>{{$item->text}}</p>
                    <span>READ MORE</span>
                </div>
            @endforeach
                <a href="" class="testimoni text-center mt-5 btn">MORE TESTIMONIALS</a>
            </div>
            <br>
            <br>
        </div>
    </section>
@endsection