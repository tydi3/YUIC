@props(['message', 'theme' => 'bootstrap', 'fade' => true])

@php
	$css = $theme === 'bootstrap' ? 'alert alert-success' : ($theme === 'tailwind' ? 'text-green-600' : '');
	if ($fade === true) {
	    $css .= ' o-fade';
	}
@endphp

<div wire:loading.remove {{ $attributes->merge(['class' => $css]) }}>
	{{ $message }}
</div>
