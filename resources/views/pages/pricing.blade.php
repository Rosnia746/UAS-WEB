
@extends('layouts.home')
@section('content')

<section>
        <div class="container">
            @foreach ($items as $item)
            <div class="content ">
                <div class="row">
                    <div class="col-sm-12">
                    <h1 class="text-center pb-5">{{$item->title}}</h1>
                    <p class="">{{$item->text}}</p>
                    <table class="table border">
                    <tr>
                    <td>onboardingfee</td>
                    <td>${{$item->onboardingfee}}</td>
                    </tr>
                    <tr>
                    <td>annualfee</td>
                    <td>${{$item->annualfee}}</td>
                    </tr>
                    </table>
                    </div>
                </div>
            
            
                <hr>
            </div>

            @endforeach

        </div>
    </section>
  
@endsection
    
  