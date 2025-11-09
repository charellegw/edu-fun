@extends('layouts.main')

@section('title')
{{ $writer->name }} | EduFun
@endsection

@section('content')
<div class="p-5">
    <!-- Profil Writer -->
    <div class="text-center mb-5">
        <img src="{{ asset($writer->gender === 'Female' ? 'images/avatar/woman.png' : 'images/avatar/man.png') }}" 
             alt="Avatar" class="rounded-circle mb-3" width="150" height="150">
        <h2>{{ $writer->name }}</h2>
        <h5 class="text-muted">{{ $writer->title }}</h5>
    </div>

    <!-- Postingan Writer -->
    <div class="row g-4">
        @foreach($articles as $post)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="bg-light rounded-4 shadow-sm overflow-hidden h-100">
                    @php
                        $thumb = 'default.jpg';
                        if ($post->category->name === 'Data Science') $thumb = 'data_science.jpg';
                        elseif ($post->category->name === 'Network Security') $thumb = 'network_security.jpg';
                    @endphp
                    <img src="{{ asset('images/banner/' . $thumb) }}" 
                         alt="Thumbnail"
                         class="img-fluid w-100" 
                         style="object-fit: cover; height: 200px;">
                    
                    <div class="p-3">
                        <h4 class="fw-bold mb-1">{{ $post->title }}</h4>
                        <span class="badge bg-secondary mb-2">{{ $post->category->name }}</span>
                        <p class="text-muted mb-2">
                            {{ $post->created_at->format('d M Y') }} | By: {{ $post->writer->name }}
                        </p>
                        <p class="mb-3 line-clamp-3">{{ $post->short_description }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-dark px-4 py-2 rounded-pill fw-semibold">Read more...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
