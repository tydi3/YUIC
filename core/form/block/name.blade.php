@props(['autocomplete' => 'name'])

<div class="mt-4">
	<x-yale.core.form.label for="name" value="Name" />
	<x-yale.core.form.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="{{ $autocomplete }}" />
</div>
