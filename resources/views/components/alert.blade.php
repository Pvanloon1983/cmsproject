@props([
    'type' => 'success',
    'message' => null,
    'session' => null,
    'error' => null // error bag key
])

@php
    $alertMessage = $message
        ?? ($session ? session($session) : null)
        ?? ($error && $errors->has($error) ? $errors->first($error) : null);
@endphp

@if ($alertMessage)
    <div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
        {!! $alertMessage !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif