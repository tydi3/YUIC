@props(['label' => 'reset', 'submit' => 'save', 'module' => '', ])
@php
	FormX::set()->button(label: $label, module: $module);
@endphp

<button wire:loading.attr="disabled" wire:target="{{ $submit }}" onclick="jsErrorHide('actionBtn');" type="reset" class="btn btn-block btn-outline-gray-400 mx-2">{{ $label }}</button>
