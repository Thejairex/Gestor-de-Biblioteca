<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head', [
        'title' => $title ?? 'Biblioteca - Sistema de Gestión',
    ])
</head>

<body>
    {{ $slot }}

    {{-- Scripts --}}
    @livewireScripts()
</body>

</html>
