@props(['theme' => 'bootstrap', 'class' => ''])
@if ($errors->any())
	<x-yale.core.notify.error :errors=$errors :theme=$theme :class=$class />
@endif
