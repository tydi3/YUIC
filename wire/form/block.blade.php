@props(['submit' => 'save'])

<form wire:submit="{{ $submit }}">

	{{ $slot }}

	@if (isset($actions))
		<div class="mt-5 mb-4 d-flex justify-content-center align-items-middle">
			{{ $actions }}
		</div>
	@endif

</form>