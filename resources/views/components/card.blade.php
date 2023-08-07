<div {{ $attributes->merge(['class' => 'card', 'style' => '']) }}>
    @if ($image != '')
        <img src="{{ $image }}" class="card-img-top" alt="...">
    @endif
    <div class="card-body">
        <h5 class="card-title">{{ $title }}</h5>

        {{ $slot }}
    </div>
</div>
