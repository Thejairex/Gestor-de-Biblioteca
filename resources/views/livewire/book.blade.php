<main class="relative flex h-screen w-full bg-[#111a22] dark group/design-root overflow-hidden">
    @if ($showModal)
        <div class="fixed inset-0 flex items-center justify-center bg-black/50 z-50">
            <div class="bg-[#1a2632] rounded-xl w-full max-w-lg p-6">
                <h2 class="text-xl text-white font-bold mb-4">
                    {{ $editing ? 'Editar Libro' : 'Agregar Libro' }}
                </h2>

                <form
                    class="space-y-4"
                    wire:submit.prevent="{{ $editing ? 'update' : 'store' }}"
                >
                    <div>
                        <label class="block text-sm text-[#93adc8]">Título</label>
                        <input
                            class="w-full p-2 rounded bg-[#243647] text-white"
                            type="text"
                            placeholder="Ingrese el título del libro"
                            wire:model="form.title"
                        />
                        @error('form.title')
                            <span class="text-red-400 text-xs">{{ $message }}</span>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm text-[#93adc8]">Autor</label>
                        <input
                            class="w-full p-2 rounded bg-[#243647] text-white"
                            type="text"
                            placeholder="Ingrese el autor del libro"
                            wire:model="form.authors"
                        />
                    </div>
                    <div>
                        <label class="block text-sm text-[#93adc8]">Editorial</label>
                        <input
                            class="w-full p-2 rounded bg-[#243647] text-white"
                            type="text"
                            placeholder="Ingrese la editorial del libro"
                            wire:model="form.publishers"
                        />
                    </div>
                    <div>
                        <label class="block text-sm text-[#93adc8]">Categoría</label>
                        <input
                            class="w-full p-2 rounded bg-[#243647] text-white"
                            type="text"
                            placeholder="Ingrese la categoría del libro"
                            wire:model="form.categories"
                        />
                    </div>
                    <div>
                        <label class="block text-sm text-[#93adc8]">ISBN</label>
                        <input
                            class="w-full p-2 rounded bg-[#243647] text-white"
                            type="text"
                            placeholder="Ingrese el ISBN del libro"
                            wire:model="form.isbn"
                        />
                    </div>
                    <div>
                        <label class="block text-sm text-[#93adc8]">Stock</label>
                        <input
                            class="w-full p-2 rounded bg-[#243647] text-white"
                            type="number"
                            placeholder="Ingrese la cantidad de stock del libro"
                            wire:model="form.stock"
                        />
                    </div>

                    <div class="flex justify-end gap-2 mt-4">
                        <button
                            class="px-4 py-2 bg-gray-600 rounded-lg text-white"
                            type="button"
                            wire:click="$set('showModal', false)"
                        >Cancelar</button>
                        <button
                            class="px-4 py-2 bg-blue-600 rounded-lg text-white"
                            type="submit"
                        >
                            {{ $editing ? 'Actualizar' : 'Guardar' }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    @endif

    <!-- Layout container con flexbox horizontal -->
    <div class="flex h-full w-full">
        <!-- Sidebar fijo -->
        @include('partials.sidebar')

        <!-- Contenido principal que ocupa el resto del espacio -->
        <div class="flex flex-col flex-1 min-w-0 overflow-auto">
            <!-- Header con título y botón -->
            <div class="flex flex-wrap justify-between items-center gap-3 p-4 border-b border-[#344d65]">
                <h1 class="text-white tracking-light text-[32px] font-bold leading-tight">
                    Gestión de Libros
                </h1>
                <div
                    class="text-white text-sm"
                    wire:loading
                >Buscando...</div>
                <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#243647] text-white text-sm font-medium leading-normal hover:bg-[#2a3f52] transition-colors"
                    wire:click="create"
                >
                    <span class="truncate">Agregar Libro</span>
                </button>
            </div>

            <!-- Mensajes de estado -->
            @if (session()->has('success'))
                <div class="mx-4 mt-3 p-3 bg-green-600 text-white rounded-lg text-sm relative">
                    {{ session('success') }}
                    <button
                        class="absolute right-2 top-2 p-1 text-white hover:text-red-500"
                        onclick="this.parentNode.remove()"
                    >
                        <svg
                            fill="none"
                            stroke-width="2"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M6 18L18 6M6 6l12 12"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </button>
                </div>
            @endif

            @if (session()->has('error'))
                )
                <div class="mx-4 mt-3 p-3 bg-red-600 text-white rounded-lg text-sm relative">
                    {{ session('error') }}
                    <button
                        class="absolute right-2 top-2 p-1 text-white hover:text-red-500"
                        onclick="this.parentNode.remove()"
                    >
                        <svg
                            fill="none"
                            stroke-width="2"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M6 18L18 6M6 6l12 12"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </button>
                </div>
            @endif

            @if (session()->has('google_message'))
                )
                <div class="mx-4 mt-3 p-3 bg-blue-600 text-white rounded-lg text-sm relative">
                    {{ session('google_message') }}
                    <button
                        class="absolute right-2 top-2 p-1 text-white hover:text-red-500"
                        onclick="this.parentNode.remove()"
                    >
                        <svg
                            fill="none"
                            stroke-width="2"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M6 18L18 6M6 6l12 12"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </button>
                </div>
            @endif

            @if (session()->has('google_error'))
                )
                <div class="mx-4 mt-3 p-3 bg-red-600 text-white rounded-lg text-sm relative">
                    {{ session('google_error') }}
                    <button
                        class="absolute right-2 top-2 p-1 text-white hover:text-red-500"
                        onclick="this.parentNode.remove()"
                    >
                        <svg
                            fill="none"
                            stroke-width="2"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M6 18L18 6M6 6l12 12"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            />
                        </svg>
                    </button>
                </div>
            @endif
            <!-- Barra de búsqueda -->
            <div class="px-4 py-3">
                <div class="flex flex-col sm:flex-row gap-3">
                    <div class="flex-1 min-w-0">
                        <label class="flex flex-col h-12 w-full">
                            <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                                <div
                                    class="text-[#93adc8] flex border-none bg-[#243647] items-center justify-center pl-4 rounded-l-lg border-r-0">
                                    <svg
                                        fill="currentColor"
                                        height="24px"
                                        viewBox="0 0 256 256"
                                        width="24px"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                                        ></path>
                                    </svg>
                                </div>
                                <input
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-[#243647] focus:border-none h-full placeholder:text-[#93adc8] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                                    placeholder="Buscar libros por título, autor, categoría o ISBN"
                                    type="text"
                                    wire:model.live.debounce.300ms="search"
                                >
                            </div>
                        </label>
                    </div>

                    <!-- Botones de búsqueda -->
                    <div class="flex gap-2">
                        <!-- Buscar en Google Books -->
                        <button
                            class="flex items-center gap-2 px-4 h-12 bg-[#4285f4] hover:bg-[#3367d6] text-white rounded-lg transition-colors disabled:opacity-50 whitespace-nowrap"
                            wire:click="searchInGoogle"
                            wire:loading.attr="disabled"
                            wire:target="searchInGoogle"
                        >
                            <svg
                                fill="currentColor"
                                height="16px"
                                viewBox="0 0 24 24"
                                width="16px"
                                wire:loading.remove
                                wire:target="searchInGoogle"
                            >
                                <path
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                    fill="#4285F4"
                                />
                                <path
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                    fill="#34A853"
                                />
                                <path
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                    fill="#FBBC05"
                                />
                                <path
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                    fill="#EA4335"
                                />
                            </svg>
                            <div
                                class="animate-spin rounded-full h-4 w-4 border-b-2 border-white"
                                wire:loading
                                wire:target="searchInGoogle"
                            ></div>
                            <span
                                wire:loading.remove
                                wire:target="searchInGoogle"
                            >Google Books</span>
                            <span
                                wire:loading
                                wire:target="searchInGoogle"
                            >Buscando...</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Tabla de libros -->
            <div class="px-4 py-3 flex-1 overflow-hidden flex flex-col">
                <!-- Pestañas -->
                <div class="flex gap-2 mb-4 border-b border-[#344d65] pb-2">
                    <button
                        class="px-4 py-2 rounded-lg {{ !$showGoogleResults ? 'bg-[#243647] text-white border-b-2 border-blue-500' : 'bg-transparent text-[#93adc8] hover:text-white hover:bg-[#1a2632]' }} transition-colors"
                        wire:click="$set('showGoogleResults', false)"
                    >
                        <div class="flex items-center gap-2">
                            <svg
                                fill="currentColor"
                                height="16px"
                                viewBox="0 0 256 256"
                                width="16px"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    d="M224,115.55V208a16,16,0,0,1-16,16H168a16,16,0,0,1-16-16V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V115.55a16,16,0,0,1,5.17-11.78l80-75.48.11-.11a16,16,0,0,1,21.53,0,1.14,1.14,0,0,0,.11.11l80,75.48A16,16,0,0,1,224,115.55Z"
                                ></path>
                            </svg>
                            Biblioteca ({{ $books->total() }})
                        </div>
                    </button>
                    <button
                        class="px-4 py-2 rounded-lg {{ $showGoogleResults ? 'bg-[#243647] text-white border-b-2 border-blue-500' : 'bg-transparent text-[#93adc8] hover:text-white hover:bg-[#1a2632]' }} transition-colors"
                        wire:click="$set('showGoogleResults', true)"
                    >
                        <div class="flex items-center gap-2">
                            <svg
                                fill="currentColor"
                                height="16px"
                                viewBox="0 0 24 24"
                                width="16px"
                            >
                                <path
                                    d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                    fill="#4285F4"
                                />
                                <path
                                    d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                    fill="#34A853"
                                />
                                <path
                                    d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                    fill="#FBBC05"
                                />
                                <path
                                    d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                    fill="#EA4335"
                                />
                            </svg>
                            Google Books ({{ count($googleBooks) }})
                        </div>
                    </button>
                </div>

                <!-- Contenido de las pestañas -->
                <div class="flex-1 overflow-hidden">
                    @if ($showGoogleResults)
                        <!-- Resultados de Google Books -->
                        <div class="h-full overflow-auto">
                            @if (count($googleBooks) > 0)
                                <div class="grid gap-4">
                                    @foreach ($googleBooks as $googleBook)
                                        <div class="bg-[#1a2632] rounded-lg p-4 border border-[#344d65]">
                                            <div class="flex gap-4">
                                                <!-- Thumbnail -->
                                                <div class="flex-shrink-0">
                                                    @if ($googleBook->thumbnail)
                                                        <img
                                                            alt="{{ $googleBook->title }}"
                                                            class="w-16 h-20 object-cover rounded"
                                                            src="{{ $googleBook->thumbnail }}"
                                                        >
                                                    @else
                                                        <div
                                                            class="w-16 h-20 bg-[#243647] rounded flex items-center justify-center">
                                                            <svg
                                                                class="text-[#93adc8]"
                                                                fill="currentColor"
                                                                height="24px"
                                                                viewBox="0 0 256 256"
                                                                width="24px"
                                                            >
                                                                <path
                                                                    d="M240,64V192a16,16,0,0,1-16,16H160a24,24,0,0,0-24,24,8,8,0,0,1-16,0,24,24,0,0,0-24-24H32a16,16,0,0,1-16-16V64A16,16,0,0,1,32,48H88a32,32,0,0,1,32,32v88a8,8,0,0,0,16,0V80a32,32,0,0,1,32-32h56A16,16,0,0,1,240,64Z"
                                                                ></path>
                                                            </svg>
                                                        </div>
                                                    @endif
                                                </div>

                                                <!-- Información del libro -->
                                                <div class="flex-1 min-w-0">
                                                    <h3 class="text-white font-medium text-lg mb-1">
                                                        {{ $googleBook->title }}</h3>
                                                    @if ($googleBook->authors)
                                                        <p class="text-[#93adc8] text-sm mb-1">
                                                            {{ $googleBook->authors }}</p>
                                                    @endif
                                                    @if ($googleBook->publisher)
                                                        <p class="text-[#93adc8] text-xs mb-1">Editorial:
                                                            {{ $googleBook->publisher }}</p>
                                                    @endif
                                                    @if ($googleBook->published_date)
                                                        <p class="text-[#93adc8] text-xs mb-2">Fecha:
                                                            {{ $googleBook->published_date }}</p>
                                                    @endif
                                                    @if ($googleBook->description)
                                                        <p class="text-[#93adc8] text-sm line-clamp-2">
                                                            {{ Str::limit($googleBook->description, 150) }}</p>
                                                    @endif
                                                </div>

                                                <!-- Acciones -->
                                                <div class="flex-shrink-0">
                                                    <button
                                                        class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg transition-colors text-sm"
                                                        wire:click="addGoogleBookToLibrary({{ $googleBook->id }})"
                                                    >
                                                        Agregar a Biblioteca
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <div class="flex flex-col items-center justify-center py-12">
                                    <p class="text-white text-lg mb-2">No se encontraron libros en Google Books</p>
                                    <p class="text-[#93adc8] text-sm">Intenta con otros términos de búsqueda</p>
                                </div>
                            @endif
                        </div>
                    @else
                        <!-- Resultados locales (tu tabla original) -->
                        <div class="overflow-hidden rounded-lg border border-[#344d65] bg-[#111a22]">
                            @if ($books->count() > 0)
                                <div class="overflow-x-auto">
                                    <table class="w-full min-w-[800px]">
                                        <thead>
                                            <tr class="bg-[#1a2632]">
                                                <th
                                                    class="px-4 py-3 text-left text-white text-sm font-medium leading-normal w-[15%]">
                                                    Portada
                                                </th>
                                                <th
                                                    class="px-4 py-3 text-left text-white text-sm font-medium leading-normal w-[10%]">
                                                    ID
                                                </th>
                                                <th
                                                    class="px-4 py-3 text-left text-white text-sm font-medium leading-normal w-[30%]">
                                                    Título</th>
                                                <th
                                                    class="px-4 py-3 text-left text-white text-sm font-medium leading-normal w-[20%]">
                                                    Autor</th>
                                                <th
                                                    class="px-4 py-3 text-left text-white text-sm font-medium leading-normal w-[15%]">
                                                    Categoría</th>
                                                <th
                                                    class="px-4 py-3 text-left text-white text-sm font-medium leading-normal w-[10%]">
                                                    Stock</th>
                                                <th
                                                    class="px-4 py-3 text-left text-[#93adc8] text-sm font-medium leading-normal w-[20%]">
                                                    Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($books as $book)
                                                <tr
                                                    class="border-t border-t-[#344d65] hover:bg-[#1a2632] transition-colors">
                                                    <td
                                                        class="px-4 py-3 text-white text-sm font-normal leading-normal">
                                                        <img
                                                            alt="Portada del libro {{ $book->title }}"
                                                            class="w-12 h-16 object-cover"
                                                            src="{{ $book->thumbnail }}"
                                                        >
                                                    </td>
                                                    <td
                                                        class="px-4 py-3 text-white text-sm font-normal leading-normal">
                                                        {{ $book->id }}
                                                    </td>
                                                    <td
                                                        class="px-4 py-3 text-white text-sm font-normal leading-normal">
                                                        {{ $book->title }}
                                                    </td>
                                                    <td
                                                        class="px-4 py-3 text-[#93adc8] text-sm font-normal leading-normal">
                                                        {{ $book->authors }}
                                                    </td>
                                                    <td
                                                        class="px-4 py-3 text-[#93adc8] text-sm font-normal leading-normal">
                                                        {{ $book->categories }}
                                                    </td>
                                                    <td
                                                        class="px-4 py-3 text-[#93adc8] text-sm font-normal leading-normal">
                                                        <span
                                                            class="px-2 py-1 text-white text-sm font-bold leading-normal rounded-full {{ $book->stock <= 2 ? 'bg-red-700' : ($book->stock <= 5 ? 'bg-yellow-700' : 'bg-green-700') }}"
                                                        >
                                                            {{ $book->stock }}
                                                        </span>
                                                    </td>
                                                    <td class="px-4 py-3">
                                                        <div class="flex gap-2">
                                                            <button
                                                                class="text-[#93adc8] hover:text-white text-xs font-bold leading-normal tracking-[0.015em] transition-colors px-2 py-1 rounded hover:bg-[#243647]"
                                                                wire:click="edit({{ $book->id }})"
                                                            >
                                                                Editar
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <div class="flex flex-col items-center justify-center py-12">
                                    <svg
                                        class="text-[#93adc8] mb-4"
                                        fill="currentColor"
                                        height="64px"
                                        viewBox="0 0 256 256"
                                        width="64px"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M240,64V192a16,16,0,0,1-16,16H160a24,24,0,0,0-24,24,8,8,0,0,1-16,0,24,24,0,0,0-24-24H32a16,16,0,0,1-16-16V64A16,16,0,0,1,32,48H88a32,32,0,0,1,32,32v88a8,8,0,0,0,16,0V80a32,32,0,0,1,32-32h56A16,16,0,0,1,240,64Z"
                                        ></path>
                                    </svg>
                                    <p class="text-white text-lg mb-2">No se encontraron libros en tu biblioteca</p>
                                    <p class="text-[#93adc8] text-sm text-center">
                                        @if ($search)
                                            Intenta buscar en Google Books o ajusta tus filtros
                                        @else
                                            Busca libros en Google Books para agregar a la biblioteca
                                        @endif
                                    </p>
                                </div>
                            @endif
                        </div>

                        <!-- Paginación para resultados locales -->
                        @if ($books->hasPages())
                            <div class="flex items-center justify-center p-4 border-t border-[#344d65] mt-4">
                                {{ $books->links('components.pagination') }}
                            </div>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
