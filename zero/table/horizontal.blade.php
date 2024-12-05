@props(['head' => false, 'body', 'foot' => false, 'tableID' => 'Row'])
<div class="table-responsive">
	<table id="{{ $tableID }}" class="table table-bordered table-centered table-nowrap mb-0 rounded align-middle">
		{{ $body }}
	</table>
</div>
