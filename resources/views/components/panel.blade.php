@php
    $classes =
        'p-4 bg-white/5 rounded-xl border transition-colors duration-300 border-transparent hover:border-blue-800 group';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
