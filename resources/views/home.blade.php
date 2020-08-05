@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-0">
                <div class="card-body">
                    <div class="mr-5">
                        <h2>
                            <marquee  class="font-weight-bolder text-danger">Selamat Datang di SPBU 34-17104</marquee>
                        </h2>
                    </div>
                    <img src="{{asset('img/pas.jpg')}}" class="rounded mx-auto d-block" width="100%" height="140%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
