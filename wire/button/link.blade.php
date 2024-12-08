@props(['label' => 'send', 'oclick' => 'save', 'scheme' => 'tertiary'])
@php
	FormX::set()->button(scheme: $scheme);
	$css = 'btn btn-' . $scheme . ' d-inline-flex align-items-center mx-2';
@endphp
<button wire:click="{{ $oclick }}" type="button" class="{{ $css }}">
	{{ $label }}
</button>
