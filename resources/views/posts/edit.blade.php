@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

    <h1>Edit Post</h1>

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

        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="title">Judul</label>
                <br>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $post->title) }}"
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
                >{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
            </div>

            <br>

            <button type="submit" class="btn">
                Update
            </button>

            <a href="{{ route('posts.index') }}" class="btn">
                Kembali
            </a>

        </form>

    </div>

@endsection