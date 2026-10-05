@extends('layouts.app')

@section('title', 'Daftar Blog')

@section('content')

    <h1>Daftar Blog</h1>

    <a href="{{ route('posts.create') }}" class="btn">
        + Tambah Post
    </a>

    <br><br>

    <x-alert />

    @forelse ($posts as $post)

        <div class="card">
            <x-card>
            <h2>{{ $post->title }}</h2>

            <p>
                {{ Str::limit($post->content, 150) }}
            </p>

            <a href="{{ route('posts.show', $post) }}" class="btn">
                Baca Selengkapnya
            </a>

            <a href="{{ route('posts.edit', $post) }}" class="btn">
                Edit
            </a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')

    <button type="submit" class="btn"
        onclick="return confirm('Yakin ingin menghapus post ini?')">
        Hapus
    </button>
</form>
</x-card>
        </div>

    @empty

        <div class="card">
            <p>Belum ada post.</p>
        </div>

    @endforelse

    {{ $posts->links() }}

@endsection