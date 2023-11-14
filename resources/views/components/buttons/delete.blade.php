@props([
    'actionId'=>''
])

<a

   action-id="{{ $actionId }}"

    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'btn btn-danger sweetDelete ml-2',
    ]) }}

    style="color: white !important;"
>
    <i class="far fa-trash-alt"></i>
</a>
