@extends('layouts.main')

@section('title')
{{ $post->title }} | EduFun
@endsection

@section('content')

<div class="container my-5">
    <!-- Judul Post -->
    <h1 class="text-center fw-bold mb-3">{{ $post->title }}</h1>

    <!-- Informasi Post -->
    <p class="text-center text-muted mb-4">
        <span class="badge bg-secondary">{{ $post->category->name }}</span> | 
        {{ $post->created_at->format('d M Y') }} | By: {{ $post->writer->name }}
    </p>

    <!-- Thumbnail Post -->
    @php
        $thumb = 'default.jpg';
        if ($post->category->name === 'Data Science') $thumb = 'data_science.jpg';
        elseif ($post->category->name === 'Network Security') $thumb = 'network_security.jpg';
    @endphp
    <div class="text-center mb-4">
        <img src="{{ asset('images/banner/' . $thumb) }}" 
             alt="Thumbnail" 
             class="img-fluid rounded-4" 
             style="max-height: 400px; object-fit: cover;">
    </div>

    <!-- Deskripsi Post -->
    <div class="bg-light p-4 rounded-4 shadow-sm mb-4">
        <h5>About</h5>
        {!! $post->short_description !!}
    </div>

    <!-- Konten Post -->
    <div class="bg-light p-4 rounded-4 shadow-sm">
        <h5>Content Description</h5>
        {!! $post->content !!}
    </div>
</div>

@endsection
