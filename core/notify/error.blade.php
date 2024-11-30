@props(['errors', 'theme' => 'bootstrap'])

@php
	$css = match ($theme) {
	    'bootstrap' => 'alert alert-danger alert-dismissible fade show',
	    'tailwind' => 'text-red-600',
	    default => '',
	};
@endphp

<div {{ $attributes->merge(['class' => $css . ' mt-4']) }} role="alert">
	@if ($errors->count() > 1)
		<strong>Oops! Some errors occurred</strong>
		<ul class="mt-2 list-disc list-inside text-sm">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@else
		<strong>Oops!</strong><br>
		{{ $errors->first() }}
	@endif

	@if ($theme === 'bootstrap')
		<button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="close"></button>
	@endif
</div>
