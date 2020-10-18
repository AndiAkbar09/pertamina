@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('pendaftarans.create')}}" class="btn btn-outline-primary">Form Penjualan Oli</a>
            </div>

            <div class="card border-0 shadow">
                <div class="px-3 py-3">
                    <h4 class="text muted">Data Penjualan Oli</h4>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>produk</th>
                                <th>ukuran</th>
                                <th>harga</th>
                                <th>tanggal</th>
                                <th>Option</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Softy Nurzella</td>
                                <td>Softy Nurzella</td>
                                <td>Softy Nurzella</td>
                                <td>Softy Nurzella</td>
                            
                                <td>
                                    <a href="" class="btn btn-outline-primary btn-sm">Edit</a>
                                    <a href="" class="btn btn-outline-danger btn-sm">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection