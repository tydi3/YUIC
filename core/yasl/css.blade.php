@props(['href' => 'yale.css', 'tag' => 'css'])

<link rel="preload" href="{{ AssetX::yasl($href, $tag) }}" as="style" onload="this.rel='stylesheet'">
