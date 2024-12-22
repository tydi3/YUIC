@props(['src' => '', 'alt' => '', 'class' => '', 'value'])

<td {{ $attributes }}>
	<img src="{{ $src }}" alt="{{ $alt }}" title="{{ $alt }}" {{ $attributes->merge(['class' => $class]) }} />
	@if (!empty($value))
		<span class="ms-3">{{ $value }}</span>
	@endif
</td>
