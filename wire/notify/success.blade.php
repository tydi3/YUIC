@props(['message', 'theme' => 'bootstrap'])

<x-yale.core.notify.success :message=$message :theme=$theme wire:loading.remove />