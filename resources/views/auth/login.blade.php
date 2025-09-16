<x-layout.app
    title="Login"
    withNarbar="false"
>
    <main
        class="relative flex h-auto min-h-screen w-full flex-col bg-[#111a22] dark group/design-root overflow-x-hidden"
        style='font-family: "Work Sans", "Noto Sans", sans-serif;'
    >
        <div class="layout-container flex h-full grow flex-col">
            @include('partials.navbar')
            <div class="px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] flex-1">
                    <div class="@container">
                        <div class="@[480px]:px-4 @[480px]:py-3">
                            <div
                                class="w-full bg-center bg-no-repeat bg-cover flex flex-col justify-end overflow-hidden bg-[#111a22] @[480px]:rounded-lg min-h-[218px]"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC5VChAonRIJJ_83QsH78TIQnNSnxuEQUpfioT-ZiVX4G9UcN1MY6Y2PzMFRID9JIWKMOFi1e2LlL0UlFldhXrt4EuSqIdZo2ihCO9oqsfHrlzaUU_LZCHtupsfTWpQlIjgzsym5we3tvoU7CLdQOKLLwttBapRCxkE49r2kbo8JIr_GCjm75HMymcRwFAYLmRANoeRq5oUaMKuIX9sNSMiZxhdX3aZz-QnCquup1GeGt5d0dTYEKGzdP9cxNgadExKFXbuD-koAYY");'
                            ></div>
                        </div>
                    </div>
                    <h2
                        class="text-white tracking-light text-[28px] font-bold leading-tight px-4 text-center pb-3 pt-5">
                        Bienvenido de nuevo</h2>
                    <form
                        action="{{ route('login.store') }}"
                        class="max-w-[480px] mx-auto"
                        method="POST"
                    >
                        @csrf

                        <!-- Campo de Correo Electrónico -->
                        <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                            <label class="flex flex-col min-w-40 flex-1">
                                <p class="text-white text-base font-medium leading-normal pb-2">Correo electrónico</p>
                                <input
                                    autocomplete="email"
                                    autofocus
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border border-[#344d65] bg-[#1a2632] focus:border-[#344d65] h-14 placeholder:text-[#93adc8] p-[15px] text-base font-normal leading-normal @error('email') border-red-500 @enderror"
                                    name="email"
                                    placeholder="Escribe tu correo"
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
                                    autocomplete="current-password"
                                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border border-[#344d65] bg-[#1a2632] focus:border-[#344d65] h-14 placeholder:text-[#93adc8] p-[15px] text-base font-normal leading-normal @error('password') border-red-500 @enderror"
                                    name="password"
                                    placeholder="********"
                                    required
                                    type="password"
                                />
                                @error('password')
                                    <span class="text-red-400 text-sm mt-1">{{ $message }}</span>
                                @enderror
                            </label>
                        </div>

                        <!-- Enlace de Contraseña Olvidada -->
                        <div class="px-4 pb-3 pt-1">
                            <a
                                class="text-[#93adc8] text-sm font-normal leading-normal underline hover:text-white transition-colors"
                                href="{{ route('password.request') }}"
                            >
                                Olvidé mi contraseña
                            </a>
                        </div>

                        <!-- Checkbox Recordarme (opcional) -->
                        <div class="flex items-center px-4 py-2">
                            <input
                                class="rounded border-[#344d65] text-[#1773cf] focus:ring-[#1773cf] focus:ring-offset-0 bg-[#1a2632]"
                                id="remember"
                                name="remember"
                                type="checkbox"
                            >
                            <label
                                class="ml-2 text-[#93adc8] text-sm font-normal"
                                for="remember"
                            >Recordarme</label>
                        </div>

                        <!-- Botón de Ingreso -->
                        <div class="px-4 py-3">
                            <button
                                class="flex min-w-[400px] w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#1773cf] text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-[#1565c0] transition-colors focus:outline-none focus:ring-2 focus:ring-[#1773cf] focus:ring-offset-2 focus:ring-offset-[#1a2632]"
                                type="submit"
                            >
                                <span class="truncate">Ingresar</span>
                            </button>
                        </div>

                        <!-- Enlace de Registro -->
                        <div class="flex justify-center px-4 pt-3">
                            <a
                                class="text-[#93adc8] text-sm font-normal leading-normal underline hover:text-white transition-colors"
                                href="{{ route('register') }}"
                            >
                                ¿Todavía no tienes una cuenta? Regístrate
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </main>
</x-layout.app>
