@props(['label' => 'save', 'submit' => 'save', 'id' => 'actionBtn', 'module' => ''])
@php
	FormX::set()->button($label, $id, $module);
@endphp

<button wire:loading.attr="disabled" wire:target="{{ $submit }}" id="{{ $id }}" type="submit" class="btn btn-block btn-tertiary mx-2" title="{{ $label }}">{{ $label }}</button>
