@props(['href', 'tag' => 'css'])
{{ AssetX::yasl($href, $tag) }}
<link rel="preload" href="{{ AssetX::yasl($href, $tag) }}" as="style" onload="this.rel='stylesheet'">
