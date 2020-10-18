@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8 ">

        <div class="card border-0 shadow">
            <div class="card-body">
            <form action="{{route('pendaftarans.save')}}" enctype="multipart/form-data" method="POST">
            @csrf
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
           @endif
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Id</label>
                            <input type="text" name="user_id" class="form-control" value="{{ $getid }}" placeholder="di isi berurutan dgn angka" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" value="" placeholder="" id="">
                        </div>
                    </div>
                    {{$errors->first('name')}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input type="text" name="nik" class="form-control" value="" placeholder="" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" value="" placeholder="" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">No Telpon</label>
                            <input type="text" name="no_telp" class="form-control" value="" placeholder="" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" name="status" class="form-control" value="" placeholder="" id="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Map Laring</label>
                            <input type="file" name="map_laring" class="form-control" value="" placeholder="" id="">
                        </div>
                    </div>
                        </div>
                        <div >
                            <button type="submit" class="btn btn-outline-info">Save</button>
                            <a href="{{route('pendaftarans')}}" class="btn btn-outline-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 