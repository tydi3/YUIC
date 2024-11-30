@props(['autocomplete' => 'on'])

<div class="mt-4">
	<x-yale.core.form.label for="email" value="email address" />
	<x-yale.core.form.input id="email" class="block mt-1 w-full" type="email" name="email" :value="FormX::input()->value('email')" required autofocus autocomplete="{{ $autocomplete }}" />
</div>
