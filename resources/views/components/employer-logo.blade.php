@props(['employer', 'width' => 90])

<img src="{{ asset($employer->logo) }}" alt="{{ $employer->name }} Logo" class="rounded-xl" width="{{ $width }}">
