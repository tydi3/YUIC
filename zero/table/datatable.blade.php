@props(['head', 'body', 'foot', 'tableID' => 'dataRows', 'recordX' => []])
@php
	$th = preg_match_all('/<th\b[^>]*>/', $head->toHtml());
	$thCount = $th + 2;
@endphp
<div class="table-responsive table-bordered py-4">
	<table id="{{ $tableID }}" class="table table-flush table-hover table-striped table-centered table-sm table-nowrap align-middle mb-0 rounded">
		<thead {{ $head->attributes->class(['bg-secondary']) }}>
			<tr>
				<th class="border-start-secondary" scope="col">#</th>
				{{ $head }}
				<th class="border-end-secondary col-1 text-center" scope="col" colspan="1"></th>
			</tr>
		</thead>
		<tbody>
			@empty($recordX)
				<x.yale.zero.table.no-record colspan="{{ $thCount }}" />
			@else
				{{ $body }}
			@endempty
		</tbody>
	</table>
</div>
