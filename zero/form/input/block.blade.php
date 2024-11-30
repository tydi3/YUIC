@props([
    'id' => null,
    'name' => null,
    'title' => false,
    'value' => '',
    'disable' => false,
    'obind' => true,
    'ochange' => false,
    'validateJS' => true,
    'btnID' => 'sendBtn',
    'css' => '',

    'placeholder' => null,
    'ocomplete' => false,

    'textrows' => 5,

    'step' => null,
    'min' => null,
    'max' => null,

    'optionLabel' => true,
    'optionRow' => [],

    'okeydown' => false,
    'okeyenter' => false,

    'label' => null,
    'type' => 'text',

    'class' => ' col-md-12',
    'td' => false,
])

@php
	FormX::set()->tag(type: $type, id: $id, name: $name, label: $label, placeholder: $placeholder, title: $title);
	if ($td === true && !$label) {
	    $td = trim($td . 'pt-3 pb-2');
	}
@endphp

@if ($td)
	<td class="{{ $td }}">
		<div class="row">
@endif

<div @if ($attributes->has('class')) {{ $class = ' ' }} @endif {{ $attributes->merge(['class' => 'col mt-2 mb-2 ' . $class]) }} x-data="{ on{{ $id }}: false }">
	@if ($label)
		<x-yale.zero.form.label :for="$id" :label="$label" />
	@endif

	@if ($type)
		@if ($type === 'textarea')
			<x-yale.zero.form.field.textarea :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :textrows=$textrows :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value />
		@elseif ($type === 'text')
			<x-yale.zero.form.field.text :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete />
		@elseif ($type === 'email')
			<x-yale.zero.form.field.email :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete />
		@elseif ($type === 'date')
			<x-yale.zero.form.field.date :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete />
		@elseif ($type === 'number')
			<x-yale.zero.form.field.number :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete :step=$step :min=$min :max=$max />
		@elseif ($type === 'percent')
			<x-yale.zero.form.field.percent :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete :step=$step :min=$min :max=$max />
		@elseif ($type === 'password')
			<x-yale.zero.form.field.password :id="$id" :name="$name" :title="$title" :placeholder="$placeholder" :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value :ocomplete=$ocomplete />
		@elseif($type === 'select')
			<x-yale.zero.form.field.select :id="$id" :name="$name" :title="$title" :optionLabel="$optionLabel" :optionRow=$optionRow :disable=$disable :obind=$obind :ochange=$ochange :validateJS=$validateJS :btnID=$btnID :value=$value />
		@endif
	@endif

	<x-yale.zero.form.input.error :for="$name" />
</div>

@if ($td)
	</div>
	</td>
@endif
