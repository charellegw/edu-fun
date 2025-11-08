@extends('layouts.main')

@section('content')
<div class="p-5">
    <h1 class="mb-5">Our Writers:</h1>

    <div class="container d-flex flex-wrap justify-content-center gap-4">
        @foreach($writers as $writer)
            <x-writer-item 
                :name="$writer['name']" 
                :specialty="$writer['specialty']" 
                :image="$writer['image']" />
        @endforeach
    </div>
</div>

@endsection