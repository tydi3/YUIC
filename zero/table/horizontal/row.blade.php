@props(['label', 'value'])
<tr>
	<th class="fw-bold text-end col-3">{{ $label }}</th>
	<td {{ $attributes }}>{{ $value }}</td>
</tr>
