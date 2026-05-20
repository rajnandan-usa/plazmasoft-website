@props(['messages'])

@if ($messages)
    <ul style="list-style: none;" {{ $attributes->merge(['class' => 'my-0 py-0 text-danger']) }}>
        @foreach ((array) $messages as $message)
            <li class="small">{{ $message }}</li>
        @endforeach
    </ul>
@endif
