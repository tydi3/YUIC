@props(['theme' => 'bootstrap'])

@if (Session::has('successX'))
	<x-yale.wire.notify.success :message="Session::get('successX')" :theme=$theme />
@elseif ($errors->any())
	<x-yale.wire.notify.error :errors=$errors :theme=$theme />
@endif
