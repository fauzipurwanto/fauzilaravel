@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                Jenis Biaya
                <a href="" class="btn btn-md float-reight btn-success">Tambah Data</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                        <tr>
                            <th>NO.</th>
                            <th>JENIS BIAYA</th>
                            <th>BIAYA</th>
                            <th>AKSI</th>
                        </tr>
                        @foreach ($biaya as $b)
                        <tr>
                            <td>{{$b->id_biaya }}</td>
                            <td>{{$b->jenis }}</td>
                            <td>Rp. {{$b->biaya }}</td>
                            <td>
                                <a href="#" class="btn btn-md btn-primary">Edit</a>
                                <a href="#" class="btn btn-md btn-danger" >Hapus</a>
                        </tr>
                        @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
