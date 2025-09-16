<x-layout.app title="Gestión de Biblioteca Online">
    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-[#111a22] dark group/design-root overflow-x-hidden"
        style='font-family: "Work Sans", "Noto Sans", sans-serif;'
    >
        <div class="layout-container flex h-full grow flex-col">
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="@container">
                        <div class="flex flex-col gap-6 px-4 py-10 @[480px]:gap-8 @[864px]:flex-row">
                            <div
                                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg @[480px]:h-auto @[480px]:min-w-[400px] @[864px]:w-full"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAE6ccnxY1IXZBuxs5dbpPpCc6Npa4cdeu20paT9jOrYlHp7-ZC1MkyLo99ehkZJeTBQWPyCwk9A1-hUBdXPHUUVClcLo1tO_inBInwmFOnV4aZRYWPLS5rSJHSJHTsAokQbD6jESBLPKlqM2SJmjeDA21sd4AywOmCei8PdL5Tbsy99xRr3ZEdvc0GfvNvhTvP1Yh_RWJKW2i1iG-xve6OCFhH8k1DEj4gZA7RLKy4WrKLvzwwfz9G_EVGJbCL-IqWZx1fqzzOdEI");'
                            ></div>
                            <div
                                class="flex flex-col gap-6 @[480px]:min-w-[400px] @[480px]:gap-8 @[864px]:justify-center">
                                <div class="flex flex-col gap-2 text-left">
                                    <h1
                                        class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]">
                                        Gestión de Biblioteca Online
                                    </h1>
                                    <h2
                                        class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                                        Reserva y préstamos de libros de manera simple y rápida
                                    </h2>
                                </div>
                                @if (Auth::check())
                                    <a
                                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#1773cf] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                                        href="{{ route('dashboard') }}"
                                    >
                                        <span class="truncate">Ir a Dashboard</span>
                                    @else
                                        <a
                                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#1773cf] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                                            href="{{ route('login') }}"
                                        >
                                            <span class="truncate">Iniciar Sesión</span>
                                @endif

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-10 px-4 py-10 @container">
                        <h1
                            class="text-white tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]">
                            Características Principales
                        </h1>
                        <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
                            <div class="flex flex-1 gap-3 rounded-lg border border-[#344d65] bg-[#1a2632] p-4 flex-col">
                                <div
                                    class="text-white"
                                    data-icon="MagnifyingGlass"
                                    data-size="24px"
                                    data-weight="regular"
                                >
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
                                <div class="flex flex-col gap-1">
                                    <h2 class="text-white text-base font-bold leading-tight">Catálogo con búsqueda
                                        avanzada</h2>
                                    <p class="text-[#93adc8] text-sm font-normal leading-normal">Encuentra cualquier
                                        libro rápidamente con nuestro potente motor de búsqueda.</p>
                                </div>
                            </div>
                            <div class="flex flex-1 gap-3 rounded-lg border border-[#344d65] bg-[#1a2632] p-4 flex-col">
                                <div
                                    class="text-white"
                                    data-icon="Calendar"
                                    data-size="24px"
                                    data-weight="regular"
                                >
                                    <svg
                                        fill="currentColor"
                                        height="24px"
                                        viewBox="0 0 256 256"
                                        width="24px"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M208,32H184V24a8,8,0,0,0-16,0v8H88V24a8,8,0,0,0-16,0v8H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32ZM72,48v8a8,8,0,0,0,16,0V48h80v8a8,8,0,0,0,16,0V48h24V80H48V48ZM208,208H48V96H208V208Zm-96-88v64a8,8,0,0,1-16,0V132.94l-4.42,2.22a8,8,0,0,1-7.16-14.32l16-8A8,8,0,0,1,112,120Zm59.16,30.45L152,176h16a8,8,0,0,1,0,16H136a8,8,0,0,1-6.4-12.8l28.78-38.37A8,8,0,1,0,145.07,132a8,8,0,1,1-13.85-8A24,24,0,0,1,176,136,23.76,23.76,0,0,1,171.16,150.45Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h2 class="text-white text-base font-bold leading-tight">Préstamos y reservas online
                                    </h2>
                                    <p class="text-[#93adc8] text-sm font-normal leading-normal">Gestiona tus préstamos
                                        y reservas desde cualquier lugar.</p>
                                </div>
                            </div>
                            <div class="flex flex-1 gap-3 rounded-lg border border-[#344d65] bg-[#1a2632] p-4 flex-col">
                                <div
                                    class="text-white"
                                    data-icon="Bell"
                                    data-size="24px"
                                    data-weight="regular"
                                >
                                    <svg
                                        fill="currentColor"
                                        height="24px"
                                        viewBox="0 0 256 256"
                                        width="24px"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h2 class="text-white text-base font-bold leading-tight">Notificaciones de
                                        vencimientos</h2>
                                    <p class="text-[#93adc8] text-sm font-normal leading-normal">Recibe recordatorios
                                        para evitar retrasos en las devoluciones.</p>
                                </div>
                            </div>
                            <div class="flex flex-1 gap-3 rounded-lg border border-[#344d65] bg-[#1a2632] p-4 flex-col">
                                <div
                                    class="text-white"
                                    data-icon="File"
                                    data-size="24px"
                                    data-weight="regular"
                                >
                                    <svg
                                        fill="currentColor"
                                        height="24px"
                                        viewBox="0 0 256 256"
                                        width="24px"
                                        xmlns="http://www.w3.org/2000/svg"
                                    >
                                        <path
                                            d="M213.66,82.34l-56-56A8,8,0,0,0,152,24H56A16,16,0,0,0,40,40V216a16,16,0,0,0,16,16H200a16,16,0,0,0,16-16V88A8,8,0,0,0,213.66,82.34ZM160,51.31,188.69,80H160ZM200,216H56V40h88V88a8,8,0,0,0,8,8h48V216Z"
                                        ></path>
                                    </svg>
                                </div>
                                <div class="flex flex-col gap-1">
                                    <h2 class="text-white text-base font-bold leading-tight">Reportes en PDF/Excel</h2>
                                    <p class="text-[#93adc8] text-sm font-normal leading-normal">Genera informes
                                        detallados para un mejor control de la biblioteca.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-white text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Cómo
                        Funciona</h2>
                    <div class="grid grid-cols-[40px_1fr] gap-x-2 px-4">
                        <div class="flex flex-col items-center gap-1 pt-3">
                            <div
                                class="text-white"
                                data-icon="User"
                                data-size="24px"
                                data-weight="regular"
                            >
                                <svg
                                    fill="currentColor"
                                    height="24px"
                                    viewBox="0 0 256 256"
                                    width="24px"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z"
                                    ></path>
                                </svg>
                            </div>
                            <div class="w-[1.5px] bg-[#344d65] h-2 grow"></div>
                        </div>
                        <div class="flex flex-1 flex-col pt-3 pb-5">
                            <p class="text-white text-base font-medium leading-normal">Registrate</p>
                        </div>
                        <div class="flex flex-col items-center gap-1">
                            <div class="w-[1.5px] bg-[#344d65] h-2"></div>
                            <div
                                class="text-white"
                                data-icon="BookOpen"
                                data-size="24px"
                                data-weight="regular"
                            >
                                <svg
                                    fill="currentColor"
                                    height="24px"
                                    viewBox="0 0 256 256"
                                    width="24px"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M224,48H160a40,40,0,0,0-32,16A40,40,0,0,0,96,48H32A16,16,0,0,0,16,64V192a16,16,0,0,0,16,16H96a24,24,0,0,1,24,24,8,8,0,0,0,16,0,24,24,0,0,1,24-24h64a16,16,0,0,0,16-16V64A16,16,0,0,0,224,48ZM96,192H32V64H96a24,24,0,0,1,24,24V200A39.81,39.81,0,0,0,96,192Zm128,0H160a39.81,39.81,0,0,0-24,8V88a24,24,0,0,1,24-24h64Z"
                                    ></path>
                                </svg>
                            </div>
                            <div class="w-[1.5px] bg-[#344d65] h-2 grow"></div>
                        </div>
                        <div class="flex flex-1 flex-col pt-3 pb-5">
                            <p class="text-white text-base font-medium leading-normal">Reservá un libro</p>
                        </div>
                        <div class="flex flex-col items-center gap-1 pb-3">
                            <div class="w-[1.5px] bg-[#344d65] h-2"></div>
                            <div
                                class="text-white"
                                data-icon="ArrowsLeftRight"
                                data-size="24px"
                                data-weight="regular"
                            >
                                <svg
                                    fill="currentColor"
                                    height="24px"
                                    viewBox="0 0 256 256"
                                    width="24px"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="M213.66,181.66l-32,32a8,8,0,0,1-11.32-11.32L188.69,184H48a8,8,0,0,1,0-16H188.69l-18.35-18.34a8,8,0,0,1,11.32-11.32l32,32A8,8,0,0,1,213.66,181.66Zm-139.32-64a8,8,0,0,0,11.32-11.32L67.31,88H208a8,8,0,0,0,0-16H67.31L85.66,53.66A8,8,0,0,0,74.34,42.34l-32,32a8,8,0,0,0,0,11.32Z"
                                    ></path>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-1 flex-col pt-3 pb-5">
                            <p class="text-white text-base font-medium leading-normal">Retirá/Devolvé fácil</p>
                        </div>
                    </div>
                    <footer class="flex flex-col gap-6 px-5 py-10 text-center @container">
                        <div
                            class="flex flex-wrap items-center justify-center gap-6 @[480px]:flex-row @[480px]:justify-around">
                            @if (Auth::check())
                                <a
                                    class="text-[#93adc8] text-base font-normal leading-normal min-w-40"
                                    href="{{ route('dashboard') }}"
                                >Dashboard</a>
                            @else
                                <a
                                    class="text-[#93adc8] text-base font-normal leading-normal min-w-40"
                                    href="{{ route('login') }}"
                                >Iniciar Sesión</a>
                            @endif
                            <a
                                class="text-[#93adc8] text-base font-normal leading-normal min-w-40"
                                href="#"
                            >Contacto</a>
                            <a
                                class="text-[#93adc8] text-base font-normal leading-normal min-w-40"
                                href="#"
                            >Créditos</a>
                        </div>
                        <p class="text-[#93adc8] text-base font-normal leading-normal">© 2024 Biblioteca Digital. Todos
                            los derechos reservados.</p>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
