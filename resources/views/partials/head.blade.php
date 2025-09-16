<meta charset="UTF-8">
<meta
    content="width=device-width, initial-scale=1.0"
    name="viewport"
>
<meta
    content="ie=edge"
    http-equiv="X-UA-Compatible"
>
<title>{{ $title ?? config('app.name') }}</title>
<link
    crossorigin=""
    href="https://fonts.gstatic.com/"
    rel="preconnect"
/>
<link
    as="style"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Work+Sans%3Awght%40400%3B500%3B700%3B900"
    onload="this.rel='stylesheet'"
    rel="stylesheet"
/>

<title>Stitch Design</title>
<link
    href="data:image/x-icon;base64,"
    rel="icon"
    type="image/x-icon"
/>

@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles()
