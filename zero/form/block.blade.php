@props([
    'submit' => 'save',
    'action' => null,
    'rowID' => null,
    'module' => null,
    'actions' => 'create|update|clone',
])

<form wire:submit.prevent="{{ $submit }}('{{ $action }}', '{{ $rowID }}')">
	@csrf

	<x-yale.zero.notify actions="{{ $actions }}" />

	<div class="row mb-6">
		{{ $slot }}
	</div>

	<div class="row mt-5">
		<div class="d-flex justify-content-center align-items-middle">
			@if ($action === 'create')
				<x-yale.zero.button.save label='create' :moduleX=$module :submit="$submit" />
				<x-yale.zero.button.reset.create :module="$module" :submit="$submit" />
			@elseif($action === 'update')
				<x-yale.zero.button.save label='save' :moduleX=$module :submit="$submit" :action="$action" />
				<x-yale.zero.button.reset.update :module="$module" :submit="$submit" :rowID="$rowID" />
			@elseif($action === 'clone')
				<x-yale.zero.button.save label='save as' :moduleX=$module :submit="$submit" :action="$action" />
				<x-yale.zero.button.reset.update :module="$module" :submit="$submit" :rowID="$rowID" />
			@endif
		</div>
	</div>
</form>
