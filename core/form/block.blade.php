@props(['action' => '', 'method' => 'post'])

<form method="{{ $method }}" action="{{ RouteX::format($action) }}" {{ $attributes->isNotEmpty() ? $attributes : '' }}>
	@csrf

	{{ $slot }}

</form>
