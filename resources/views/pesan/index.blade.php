@extends('layouts.main2')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">pesan</li>
                        </ol>
                    </nav>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('img/' . $data->image) }}" alt="" width="50%">
                        </div>
                        <div class="col-md-6">
                            <h3>{{ $data->title }}</h3>

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">Harga</th>
                                        <td>Rp.{{ number_format($data->price) }}</td>
                                    <tr>
                                        <th scope="row">Descripsi</th>
                                        <td>{{ $data->description }}</td>
                                    </tr>

                                    
                                        <tr>
                                            <th>Jumlah Pesan</th>
                                            <td>
                                                <form action="{{ url('pesan') }}/{{ $data->id }}" method="post">
                                                    @csrf
                                                    <input type="text" name="jumlah_pesan" id="" class="form-control"
                                                    required="">
                                                    <button type="submit" class="btn btn-primary mt-3">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                                        <path
                                                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                                    </svg> Masukkan Keranjang
                                                </button>
                                            </form>
                                            </td>
                                        </tr>
                                        
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
