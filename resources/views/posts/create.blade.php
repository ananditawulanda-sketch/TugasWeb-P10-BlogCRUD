@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')

    <h1>Tambah Post Baru</h1>

    @if ($errors->any())
        <div class="card">
            <strong>Terjadi kesalahan:</strong>

            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf

            <div>
                <label for="title">Judul</label>
                <br>
                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title') }}"
                    style="width: 100%; padding: 10px;"
                >
                @error('title')
                     <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>

            <br>

            <div>
                <label for="content">Isi Blog</label>
                <br>
                <textarea
                    id="content"
                    name="content"
                    rows="8"
                    style="width: 100%; padding: 10px;"
                >{{ old('content') }}</textarea>
                @error('content')
    <small style="color: red;">{{ $message }}</small>
@enderror
            </div>

            <br>

            <button type="submit" class="btn">
                Simpan
            </button>

            <a href="{{ route('posts.index') }}" class="btn">
                Kembali
            </a>
        </form>

    </div>

@endsection