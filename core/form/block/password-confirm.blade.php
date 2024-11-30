@props(['autocomplete' => 'new-password'])

<div class="mt-4">
	<x-yale.core.form.label for="password_confirmation" value="confirm password" />
	<x-yale.core.form.input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="{{ $autocomplete }}" />
</div>