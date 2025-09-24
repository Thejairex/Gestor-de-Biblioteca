<div class="layout-content-container flex flex-col w-50">
    <div class="flex h-full min-h-[700px] flex-col justify-between bg-[#111a22] p-4">
        <div class="flex flex-col gap-4">
            <h1 class="text-white text-base font-medium leading-normal">Biblioteca</h1>
            <div class="flex flex-col gap-2">
                {{-- Opción 1: Usando request()->routeIs() --}}
                <a
                    class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('dashboard') ? 'bg-[#243647]' : 'hover:bg-[#1a2832]' }} transition-colors"
                    href="{{ route('dashboard') }}"
                >
                    <div
                        class="text-white"
                        data-icon="House"
                        data-size="24px"
                        data-weight="fill"
                    >
                        <svg
                            fill="currentColor"
                            height="24px"
                            viewBox="0 0 256 256"
                            width="24px"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M224,115.55V208a16,16,0,0,1-16,16H168a16,16,0,0,1-16-16V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V115.55a16,16,0,0,1,5.17-11.78l80-75.48.11-.11a16,16,0,0,1,21.53,0,1.14,1.14,0,0,0,.11.11l80,75.48A16,16,0,0,1,224,115.55Z"
                            ></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-medium leading-normal">Inicio</p>
                </a>
                <a
                    class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('books.*') ? 'bg-[#243647]' : 'hover:bg-[#1a2832]' }} transition-colors"
                    href="{{ route('books.index') }}"
                >
                    <div
                        class="text-white"
                        data-icon="BookOpen"
                        data-size="24px"
                        data-weight="fill"
                    >
                        <svg
                            fill="currentColor"
                            height="24px"
                            viewBox="0 0 256 256"
                            width="24px"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                d="M240,64V192a16,16,0,0,1-16,16H160a24,24,0,0,0-24,24,8,8,0,0,1-16,0,24,24,0,0,0-24-24H32a16,16,0,0,1-16-16V64A16,16,0,0,1,32,48H88a32,32,0,0,1,32,32v88a8,8,0,0,0,16,0V80a32,32,0,0,1,32-32h56A16,16,0,0,1,240,64Z"
                            ></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-medium leading-normal">Libros</p>
                </a>

                <a
                    class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('loans.*') ? 'bg-[#243647]' : 'hover:bg-[#1a2832]' }} transition-colors"
                    href="{{ route('loans.index') }}"
                >
                    <div
                        class="text-white"
                        data-icon="Bookmark"
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
                                d="M184,32H72A16,16,0,0,0,56,48V224a8,8,0,0,0,12.24,6.78L128,193.43l59.77,37.35A8,8,0,0,0,200,224V48A16,16,0,0,0,184,32Zm0,16V161.57l-51.77-32.35a8,8,0,0,0-8.48,0L72,161.56V48ZM132.23,177.22a8,8,0,0,0-8.48,0L72,209.57V180.43l56-35,56,35v29.14Z"
                            ></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-medium leading-normal">Préstamos</p>
                </a>

                <a
                    class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('reservations.*') ? 'bg-[#243647]' : 'hover:bg-[#1a2832]' }} transition-colors"
                    href="{{ route('reservations.index') ?? '#' }}"
                >
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
                    <p class="text-white text-sm font-medium leading-normal">Reservas</p>
                </a>

                <a
                    class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('reports.*') ? 'bg-[#243647]' : 'hover:bg-[#1a2832]' }} transition-colors"
                    href="{{ route('reports.index') ?? '#' }}"
                >
                    <div
                        class="text-white"
                        data-icon="PresentationChart"
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
                                d="M216,40H136V24a8,8,0,0,0-16,0V40H40A16,16,0,0,0,24,56V176a16,16,0,0,0,16,16H79.36L57.75,219a8,8,0,0,0,12.5,10l29.59-37h56.32l29.59,37a8,8,0,1,0,12.5-10l-21.61-27H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,136H40V56H216V176ZM104,120v24a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0Zm32-16v40a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm32-16v56a8,8,0,0,1-16,0V88a8,8,0,0,1,16,0Z"
                            ></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-medium leading-normal">Reportes</p>
                </a>

                <a
                    class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('users.*') ? 'bg-[#243647]' : 'hover:bg-[#1a2832]' }} transition-colors"
                    href="{{ route('users.index') }}"
                >
                    <div
                        class="text-white"
                        data-icon="Users"
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
                                d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"
                            ></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-medium leading-normal">Usuarios</p>
                </a>

                {{-- <a
                    class="flex items-center gap-3 px-3 py-2 rounded-lg {{ request()->routeIs('configuracion.*') ? 'bg-[#243647]' : 'hover:bg-[#1a2832]' }} transition-colors"
                    href="{{ route('configuracion.index') }}"
                >
                    <div
                        class="text-white"
                        data-icon="Gear"
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
                                d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z"
                            ></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-medium leading-normal">Configuración</p>
                </a> --}}
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <form
                action="{{ route('logout') }}"
                class="w-full"
                method="POST"
            >
                @csrf
                <button
                    class="w-full flex items-center gap-3 px-3 py-2 hover:bg-[#1a2832] rounded-lg transition-colors"
                    type="submit"
                >
                    <div
                        class="text-white"
                        data-icon="ArrowLeft"
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
                                d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z"
                            ></path>
                        </svg>
                    </div>
                    <p class="text-white text-sm font-medium leading-normal">Logout</p>
                </button>
            </form>
        </div>
    </div>
</div>
