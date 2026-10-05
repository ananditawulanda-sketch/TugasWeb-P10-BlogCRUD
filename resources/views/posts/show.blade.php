@extends('layouts.app')

@section('title', $post->title)

@section('content')

    <div class="card">

        <h1>{{ $post->title }}</h1>

        <p>{{ $post->content }}</p>

        <br>

        <a href="{{ route('posts.index') }}" class="btn">
            Kembali
        </a>

        <a href="{{ route('posts.edit', $post) }}" class="btn">
            Edit
        </a>

    </div>

@endsection