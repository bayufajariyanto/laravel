@extends('layout.main')

@section('title', 'Form Ubah Data Mahasiswa')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Ubah Data Mahasiswa</h1>

            <form method="post" action="/students/{{ $student->id }}">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama" value="{{ $student->nama }}">
                    @error('nama')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" name="nim" id="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="Masukkan NIM" value="{{ $student->nim }}">
                    @error('nim')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" value="{{ $student->email }}">
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror" placeholder="Masukkan Jurusan" value="{{ $student->jurusan }}">
                    @error('jurusan')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <button type="submit"class="btn btn-primary">Tambah Data</button>
            </form>

        </div>
    </div>
</div>
@endsection