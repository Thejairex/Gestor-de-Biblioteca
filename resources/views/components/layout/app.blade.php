<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head', [
        'title' => $title,
    ])
</head>

<body>
    {{ $slot }}

    {{-- Scripts --}}
    @livewireScripts()
</body>

</html>
