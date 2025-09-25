<html>

<head>
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

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
    <div
        class="relative flex h-auto min-h-screen w-full flex-col bg-[#111a22] dark group/design-root overflow-x-hidden"
        style='font-family: "Work Sans", "Noto Sans", sans-serif;'
    >
        <div class="layout-container flex h-full grow flex-col">
            <div class="gap-1 px-6 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col w-80">
                    <div class="flex h-full min-h-[700px] flex-col justify-between bg-[#111a22] p-4">
                        <div class="flex flex-col gap-4">
                            <h1 class="text-white text-base font-medium leading-normal">Mi Biblioteca</h1>
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-3 px-3 py-2">
                                    <div
                                        class="text-white"
                                        data-icon="House"
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
                                                d="M218.83,103.77l-80-75.48a1.14,1.14,0,0,1-.11-.11,16,16,0,0,0-21.53,0l-.11.11L37.17,103.77A16,16,0,0,0,32,115.55V208a16,16,0,0,0,16,16H96a16,16,0,0,0,16-16V160h32v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V115.55A16,16,0,0,0,218.83,103.77ZM208,208H160V160a16,16,0,0,0-16-16H112a16,16,0,0,0-16,16v48H48V115.55l.11-.1L128,40l79.9,75.43.11.1Z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <p class="text-white text-sm font-medium leading-normal">Inicio</p>
                                </div>
                                <div class="flex items-center gap-3 px-3 py-2 rounded-lg bg-[#243647]">
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
                                </div>
                                <div class="flex items-center gap-3 px-3 py-2">
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
                                </div>
                                <div class="flex items-center gap-3 px-3 py-2">
                                    <div
                                        class="text-white"
                                        data-icon="Handshake"
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
                                                d="M119.76,217.94A8,8,0,0,1,112,224a8.13,8.13,0,0,1-2-.24l-32-8a8,8,0,0,1-2.5-1.11l-24-16a8,8,0,1,1,8.88-13.31l22.84,15.23,30.66,7.67A8,8,0,0,1,119.76,217.94Zm132.69-96.46a15.89,15.89,0,0,1-8,9.25l-23.68,11.84-55.08,55.09a8,8,0,0,1-7.6,2.1l-64-16a8.06,8.06,0,0,1-2.71-1.25L35.86,142.87,11.58,130.73a16,16,0,0,1-7.16-21.46L29.27,59.58h0a16,16,0,0,1,21.46-7.16l22.06,11,53-15.14a8,8,0,0,1,4.4,0l53,15.14,22.06-11a16,16,0,0,1,21.46,7.16l24.85,49.69A15.9,15.9,0,0,1,252.45,121.48Zm-46.18,12.94L179.06,80H147.24L104,122c12.66,8.09,32.51,10.32,50.32-7.63a8,8,0,0,1,10.68-.61l34.41,27.57Zm-187.54-18,17.69,8.85L61.27,75.58,43.58,66.73ZM188,152.66l-27.71-22.19c-19.54,16-44.35,18.11-64.91,5a16,16,0,0,1-2.72-24.82.6.6,0,0,1,.08-.08L137.6,67.06,128,64.32,77.58,78.73,50.21,133.46l49.2,35.15,58.14,14.53Zm49.24-36.24L212.42,66.73l-17.69,8.85,24.85,49.69Z"
                                            ></path>
                                        </svg>
                                    </div>
                                    <p class="text-white text-sm font-medium leading-normal">Préstamos</p>
                                </div>
                                <div class="flex items-center gap-3 px-3 py-2">
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
                                    <p class="text-white text-sm font-medium leading-normal">Reservas</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="flex items-center gap-3 px-3 py-2">
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
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>
