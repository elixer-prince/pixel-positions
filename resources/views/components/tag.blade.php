@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-white/10 hover:bg-white/25 py-1 font-bold rounded-xl transition-colors duration-300';

    if ($size === 'base') {
        $classes .= ' px-5 text-sm';
    }

    if ($size === 'small') {
        $classes .= ' px-3 text-2xs';
    }

    $tagName = $tag->name ?? 'All';
@endphp

<a class="{{ $classes }}" href="/tags/{{ strtolower($tagName) }}">{{ $tagName }}</a>
