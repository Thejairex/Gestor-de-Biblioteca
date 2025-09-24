<x-layout.app title="Gestión de Biblioteca Online">
    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-[#111a22] dark group/design-root overflow-x-hidden"
        style='font-family: "Work Sans", "Noto Sans", sans-serif;'
    >
        <div class="layout-container flex h-full grow flex-col">
            <div class="gap-1 px-6 flex flex-1 justify-center py-5">
                @include('partials.sidebar')
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-wrap justify-between gap-3 p-4">
                        <p class="text-white tracking-light text-[32px] font-bold leading-tight min-w-72">Dashboard</p>
                    </div>
                    <h3 class="text-white text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Métricas
                        rápidas</h3>
                    <div class="flex flex-wrap gap-4 p-4">
                        <div
                            class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#344d65] bg-[#243647]">
                            <p class="text-white text-base font-medium leading-normal ">Total Books</p>
                            <p class="text-white tracking-light text-2xl font-bold leading-tight">{{ $totalBooks }}
                            </p>
                        </div>
                        <div
                            class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#344d65] bg-[#243647]">
                            <p class="text-white text-base font-medium leading-normal ">Active Loans</p>
                            <p class="text-white tracking-light text-2xl font-bold leading-tight">75</p>
                        </div>
                        <div
                            class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#344d65] bg-[#243647]">
                            <p class="text-white text-base font-medium leading-normal ">Overdue Items</p>
                            <p class="text-white tracking-light text-2xl font-bold leading-tight">5</p>
                        </div>
                        <div
                            class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-lg p-6 border border-[#344d65] bg-[#243647]">
                            <p class="text-white text-base font-medium leading-normal ">Active Reservations</p>
                            <p class="text-white tracking-light text-2xl font-bold leading-tight">20</p>
                        </div>
                    </div>
                    <h3 class="text-white text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Recent
                        Activity</h3>
                    <div class="flex items-center gap-4 bg-[#111a22] px-4 min-h-[72px] py-2">
                        <div
                            class="text-white flex items-center justify-center rounded-lg bg-[#243647] shrink-0 size-12"
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
                        <div class="flex flex-col justify-center">
                            <p class="text-white text-base font-medium leading-normal line-clamp-1">The Great Gatsby
                            </p>
                            <p class="text-[#93adc8] text-sm font-normal leading-normal line-clamp-2">Returned on
                                2024-07-20</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 bg-[#111a22] px-4 min-h-[72px] py-2">
                        <div
                            class="text-white flex items-center justify-center rounded-lg bg-[#243647] shrink-0 size-12"
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
                        <div class="flex flex-col justify-center">
                            <p class="text-white text-base font-medium leading-normal line-clamp-1">To Kill a
                                Mockingbird</p>
                            <p class="text-[#93adc8] text-sm font-normal leading-normal line-clamp-2">Reserved on
                                2024-07-22</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 bg-[#111a22] px-4 min-h-[72px] py-2">
                        <div
                            class="text-white flex items-center justify-center rounded-lg bg-[#243647] shrink-0 size-12"
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
                        <div class="flex flex-col justify-center">
                            <p class="text-white text-base font-medium leading-normal line-clamp-1">1984</p>
                            <p class="text-[#93adc8] text-sm font-normal leading-normal line-clamp-2">Returned on
                                2024-07-25</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 bg-[#111a22] px-4 min-h-[72px] py-2">
                        <div
                            class="text-white flex items-center justify-center rounded-lg bg-[#243647] shrink-0 size-12"
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
                        <div class="flex flex-col justify-center">
                            <p class="text-white text-base font-medium leading-normal line-clamp-1">Pride and Prejudice
                            </p>
                            <p class="text-[#93adc8] text-sm font-normal leading-normal line-clamp-2">Reserved on
                                2024-07-28</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
