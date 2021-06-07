@extends('layout/main')

@section('title', 'Detail Mahasiswa')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Detail Mahasiswa</h1>

            

            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <p class="card-text">{{ $student->nrp }}</p>
                    <p class="card-text">{{ $student->email }}</p>
                    <p class="card-text">{{ $student->jurusan }}</p>
                    <button type="submit" class="btn btn-primary">Edit</button>
                    <form action="{{$student->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf   
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                <a href="/students" class="btn btn-success">Kembali</a>
                </div>
            </div>

            

        </div>
    </div>
</div>
@endsection