@props(['label' => 'send', 'href', 'scheme' => 'tertiary'])
@php
	FormX::set()->button(scheme: $scheme);
	$css = 'btn btn-' . $scheme . ' d-inline-flex align-items-center mx-2';
@endphp

<a wire:navigate href="{{ $href }}" class="{{ $css }}"> {{ $label }}</a>
