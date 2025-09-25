@if ($paginator->hasPages())
    <nav
        aria-label="Pagination Navigation"
        class="flex items-center gap-1"
        role="navigation"
    >
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="flex size-10 items-center justify-center text-[#93adc8] cursor-not-allowed">
                <svg
                    fill="currentColor"
                    height="18px"
                    viewBox="0 0 256 256"
                    width="18px"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"
                    ></path>
                </svg>
            </span>
        @else
            <button
                class="flex size-10 items-center justify-center hover:bg-[#243647] rounded-lg transition-colors text-white"
                rel="prev"
                wire:click="previousPage"
                wire:loading.attr="disabled"
            >
                <svg
                    fill="currentColor"
                    height="18px"
                    viewBox="0 0 256 256"
                    width="18px"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"
                    ></path>
                </svg>
            </button>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span
                    class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-white">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span
                            aria-current="page"
                            class="text-sm font-bold leading-normal tracking-[0.015em] flex size-10 items-center justify-center text-white rounded-lg bg-[#243647]"
                        >{{ $page }}</span>
                    @else
                        <button
                            class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-white rounded-lg hover:bg-[#243647] transition-colors"
                            wire:click="gotoPage({{ $page }})"
                        >{{ $page }}</button>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button
                class="flex size-10 items-center justify-center hover:bg-[#243647] rounded-lg transition-colors text-white"
                rel="next"
                wire:click="nextPage"
                wire:loading.attr="disabled"
            >
                <svg
                    fill="currentColor"
                    height="18px"
                    viewBox="0 0 256 256"
                    width="18px"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"
                    ></path>
                </svg>
            </button>
        @else
            <span class="flex size-10 items-center justify-center text-[#93adc8] cursor-not-allowed">
                <svg
                    fill="currentColor"
                    height="18px"
                    viewBox="0 0 256 256"
                    width="18px"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"
                    ></path>
                </svg>
            </span>
        @endif
    </nav>
@endif
