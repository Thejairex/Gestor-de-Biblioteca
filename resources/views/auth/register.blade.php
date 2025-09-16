<x-layout.app title="Registrarse">

    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-[#111a22] dark group/design-root overflow-x-hidden"
        style='font-family: "Work Sans", "Noto Sans", sans-serif;'
    >
        <div class="layout-container flex h-full grow flex-col">
            @include('partials.navbar')
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
                    <h2 class="text-white tracking-light text-[28px] font-bold leading-tight px-4 text-center pb-3 pt-5">
                        Create Your Account</h2>
                    <form
                        action="{{ route('register.store') }}"
                        class="max-w-[480px] mx-auto"
                        method="POST"
                    >
                        @csrf

                        <!-- Campo de Nombre Completo -->
                        <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                                <p class="text-white text-base font-medium leading-normal pb-2">Nombre completo</p>
                                <input
                                    autocomplete="name"
                                    autofocus
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-[#243647] focus:border-none h-14 placeholder:text-[#93adc8] p-4 text-base font-normal leading-normal @error('name') ring-2 ring-red-500 @enderror"
                                    name="name"
                                    placeholder="Ingresa tu nombre completo"
                                    required
                                    type="text"
                                    value="{{ old('name') }}"
                                />
                                @error('name')
                                    <span class="text-red-400 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>

                        <!-- Campo de Email -->
                        <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                                <p class="text-white text-base font-medium leading-normal pb-2">Correo electrónico</p>
                                <input
                                    autocomplete="email"
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-[#243647] focus:border-none h-14 placeholder:text-[#93adc8] p-4 text-base font-normal leading-normal @error('email') ring-2 ring-red-500 @enderror"
                                    name="email"
                                    placeholder="Ingresa tu correo electrónico"
                                    required
                                    type="email"
                                    value="{{ old('email') }}"
                                />
                                @error('email')
                                    <span class="text-red-400 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>

                        <!-- Campo de Contraseña -->
                        <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                                <p class="text-white text-base font-medium leading-normal pb-2">Contraseña</p>
                                <input
                                    autocomplete="new-password"
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-[#243647] focus:border-none h-14 placeholder:text-[#93adc8] p-4 text-base font-normal leading-normal @error('password') ring-2 ring-red-500 @enderror"
                                    name="password"
                                    placeholder="Crea una contraseña"
                                    required
                                    type="password"
                                />
                                @error('password')
                                    <span class="text-red-400 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>

                        <!-- Campo de Confirmación de Contraseña -->
                        <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                                <p class="text-white text-base font-medium leading-normal pb-2">Confirmar contraseña</p>
                                <input
                                    autocomplete="new-password"
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-[#243647] focus:border-none h-14 placeholder:text-[#93adc8] p-4 text-base font-normal leading-normal"
                                    name="password_confirmation"
                                    placeholder="Confirma tu contraseña"
                                    required
                                    type="password"
                                />
                            </label>
                        </div>

                        <!-- Checkbox de Términos y Condiciones (opcional) -->
                        {{-- <div class="flex items-start px-4 py-2">
                            <input
                                class="mt-1 rounded border-[#243647] text-[#1773cf] focus:ring-[#1773cf] focus:ring-offset-0 bg-[#243647]"
                                id="terms"
                                name="terms"
                                required
                                type="checkbox"
                            >
                            <label
                                class="ml-2 text-[#93adc8] text-sm font-normal"
                                for="terms"
                            >
                                Acepto los <a
                                    class="text-[#1773cf] underline hover:text-white transition-colors"
                                    href="#"
                                >términos y condiciones</a> y la <a
                                    class="text-[#1773cf] underline hover:text-white transition-colors"
                                    href="#"
                                >política de privacidad</a>
                            </label>
                            @error('terms')
                                <span class="text-red-400 text-sm mt-1 block w-full ml-6">{{ $message }}</span>
                            @enderror
                        </div> --}}

                        <!-- Botón de Registro -->
                        <div class="px-4 py-3">
                            <button
                                class="flex min-w-[400px] w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1773cf] text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#1565c0] transition-colors focus:outline-none focus:ring-2 focus:ring-[#1773cf] focus:ring-offset-2 focus:ring-offset-[#243647]"
                                type="submit"
                            >
                                <span class="truncate">Registrarse</span>
                            </button>
                        </div>

                        <!-- Enlace al Login -->
                        <div class="flex justify-center px-4 pb-3 pt-1">
                            <a
                                class="text-[#93adc8] text-sm font-normal leading-normal text-center underline hover:text-white transition-colors"
                                href="{{ route('login') }}"
                            >
                                ¿Ya tienes una cuenta? Inicia sesión
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


</x-layout.app>
