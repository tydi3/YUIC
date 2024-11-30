@props(['message', 'theme' => 'bootstrap', 'fade' => true])

@php
    $css = $theme === 'bootstrap' ? 'alert alert-success' : ($theme === 'tailwind' ? 'text-green-600' : '');
@endphp

<div {{ $attributes->merge(['class' => $css]) }}>
    {{ $message }}
</div>
