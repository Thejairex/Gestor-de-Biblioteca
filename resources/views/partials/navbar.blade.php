<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#243647] px-10 py-3">
    <div class="flex items-center gap-4 text-white">
        <div class="size-4">
            <svg
                fill="none"
                viewBox="0 0 48 48"
                xmlns="http://www.w3.org/2000/svg"
            >
                <g clip-path="url(#clip0_6_330)">
                    <path
                        clip-rule="evenodd"
                        d="M24 0.757355L47.2426 24L24 47.2426L0.757355 24L24 0.757355ZM21 35.7574V12.2426L9.24264 24L21 35.7574Z"
                        fill-rule="evenodd"
                        fill="currentColor"
                    ></path>
                </g>
                <defs>
                    <clipPath id="clip0_6_330">
                        <rect
                            fill="white"
                            height="48"
                            width="48"
                        ></rect>
                    </clipPath>
                </defs>
            </svg>
        </div>
        <h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">Libro</h2>
    </div>
    <div class="flex flex-1 justify-end gap-8">
        <div class="flex items-center gap-9">
            <a
                class="text-white text-sm font-medium leading-normal"
                href="#"
            >Inicio</a>
            @if (Auth::check())
                <a
                    class="text-white text-sm font-medium leading-normal"
                    href="#"
                >Explorar</a>
                <a
                    class="text-white text-sm font-medium leading-normal"
                    href="#"
                >Mis libros</a>
            @endif

        </div>
        <button
            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#243647] text-white text-sm font-bold leading-normal tracking-[0.015em]"
        >
            <span class="truncate">Iniciar Sesión</span>
        </button>
    </div>
</header>
