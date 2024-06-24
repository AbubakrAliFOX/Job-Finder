@props(['tag', 'size' => 'base'])
@php
    $classes = 'bg-white/10 font-bold rounded-xl hover:bg-white/25 transition-colors duration-300';

    $classes .= $size === 'small' ? ' px-3 py-1 text-2xs' : ' px-5 py-1 text-sm';
@endphp

<a href="tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
