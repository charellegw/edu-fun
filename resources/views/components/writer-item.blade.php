<a href="{{ route('writers.show', $id) }}" style="text-decoration: none; color: inherit;">
    <div class="text-center text-truncate">
        <div>
            <img src="{{ asset($image) }}" alt="{{ $name }}" class="rounded-circle mb-3" width="150" height="150">
        </div>
        <h3 class="mt-3">{{ $name }}</h3>
        <p class="">{{ $specialty }}</p>
    </div>
</a>

