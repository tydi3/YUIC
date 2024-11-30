@props(['label' => 'clear', 'submit' => 'save', 'rowID' => null, 'module' => ''])
@php
	FormX::set()->button($label, $rowID, $module);
@endphp

<button wire:loading.attr="disabled" wire:target="{{ $submit }}" @click="$wire.clear('update', '{{ $rowID }}')" onclick="jsHideError('actionBtn');" type="button" class="btn btn-block btn-outline-gray-400 mx-2">{{ $label }}</button>
