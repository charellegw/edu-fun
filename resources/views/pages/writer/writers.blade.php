@extends('layouts.main')

@section('content')
<div class="p-5">
    <h1 class="mb-5 text-center">Our Writers:</h1>

    <div class="container">
        <div class="row g-4 justify-content-center">
            @foreach($writers as $writer)
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <x-writer-item 
                        :name="$writer['name']" 
                        :specialty="$writer['specialty']" 
                        :image="$writer['image']" />
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
