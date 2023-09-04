@props([
    'actionId'=>''
])

<a wire:click.prevent
   action-id="{{ $actionId }}"

    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'btn btn-danger sweetDelete ml-2',
    ]) }}

    style="color: white !important;"
>
    <i class="far fa-trash-alt"></i>
</a>
