@props(['action', 'put' => false, 'delete' => false])

<form method="POST" action="{{ $action }}">
    @csrf

    @if($put)
        @method('PUT')
    @elseif($delete)
        @method('DELETE')
    @endif

    {{ $slot }}
</form>
