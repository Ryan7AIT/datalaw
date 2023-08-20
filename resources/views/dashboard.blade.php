<!-- Main -->
<x-dash-layout>

    <div class="h-full overflow-hidden pl-10">
        <main id="dashboard-main" class="h-[calc(100vh-8rem)] overflow-auto px-4 py-8">
        <!-- Put your content inside of the <main/> tag -->
        <h1 class="text-2xl font-black text-gray-800">Bienvenu!</h1>
        {{-- <p class="mb-4 text-gray-600">notre solution complète de mise en conformité à la loi 18-07 sur la protection des données à caractère personnel.</p> --}}

        <div class="flex">

            <div class="left w-3/5 ">
                <div class=" my-6 grid gap-4 sm:grid-cols-2 mx-auto max-w-screen-lg">
                    <div class="px-4 bg-white rounded-lg py-6 shadow-lg shadow-blue-100 flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-14 mt-4 w-14 rounded-xl bg-blue-50 p-4 text-blue-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                          </svg>

                        <div class="ml-4 mt-2">
                            <p class="mt-4 font-medium text-xl text-center">Nombre de traitments</p>
                            <p class="mt-2 text-xl font-semibold text-center">
                            {{$proceessCount}}

                            </p>
                        </div>
                    </div>
                    <div class="px-4 bg-white rounded-lg py-6 shadow-lg shadow-blue-100 flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-14 w-14 rounded-xl bg-rose-50 p-4 text-rose-300 mt-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                          </svg>


                        <div class="ml-4 mt-2">
                            <p class="mt-4 font-medium text-xl text-center">Traitments en cour d'audit</p>
                            <p class="mt-2 text-xl font-semibold text-center">
                            {{$proceessCountAudit}}

                            </p>
                        </div>
                    </div>

                </div>
                <div class="m-6 grid gap-4 sm:grid-cols-2 mx-auto max-w-screen-lg">
                    <div class="px-4 bg-white rounded-lg py-6 shadow-lg shadow-blue-100 flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-14 w-14 rounded-xl bg-green-50 mt-4 p-4 text-green-300">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 004.5 9.75v7.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25v-7.5a2.25 2.25 0 00-2.25-2.25h-.75m0-3l-3-3m0 0l-3 3m3-3v11.25m6-2.25h.75a2.25 2.25 0 012.25 2.25v7.5a2.25 2.25 0 01-2.25 2.25h-7.5a2.25 2.25 0 01-2.25-2.25v-.75" />
                          </svg>


                        <div class="ml-4 mt-2">
                            <p class="mt-4 font-medium text-xl text-center">Traitments avec transfer a l'etranger</p>
                            <p class="mt-2 text-xl font-semibold text-center">
                            1

                            </p>
                        </div>
                    </div>
                    <div class="px-4 bg-white rounded-lg py-6 shadow-lg shadow-blue-100 flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-14 w-14 rounded-xl bg-green-300 p-4 text-green-50 mt-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                          </svg>


                        <div class="ml-4 mt-2">
                            <p class="mt-4 font-medium text-xl text-center">Nombre de violation</p>
                            <p class="mt-2 text-xl font-semibold text-center">
                            0

                            </p>
                        </div>
                    </div>

                </div>
                <div class="m-6 grid gap-4 sm:grid-cols-2  mx-auto max-w-screen-lg">
                    <div class="px-4 bg-white rounded-lg py-6 shadow-lg shadow-blue-100 flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-14 w-14 rounded-xl bg-blue-50 p-4 text-blue-400 mt-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                          </svg>


                        <div class="ml-4 mt-2">
                            <p class="mt-4 font-medium text-xl text-center">Nombre de sous traitants</p>
                            <p class="mt-2 text-xl font-semibold text-center">
                            2

                            </p>
                        </div>
                    </div>
                    <div class="px-4 bg-white rounded-lg py-6 shadow-lg shadow-blue-100 flex ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-14 w-14 rounded-xl bg-red-400 p-4 text-white mt-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
                          </svg>



                        <div class="ml-4 mt-2">
                            <p class="mt-4 font-medium text-xl text-center">Demande de droits</p>
                            <p class="mt-2 text-xl font-semibold text-center">
                            {{$rightsCount}}

                            </p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="right  w-96 h-96 ml-6 mt-14">
                <div class="px-4 bg-white rounded-lg py-2 shadow-lg shadow-blue-100 h-full w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-20 h-20 mx-auto mt-6  rounded-xl bg-blue-50 p-4 text-blue-300">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                      </svg>

                    <p class="mt-4  text-center text-2xl font-semibold">Niveau  de confermite des  traitments</p>
                    <p class="mt-4  text-blue-500  font-bold text-3xl text-center">
                    {{$confermityLvl}}%

                    </p>
                </div>
            </div>
        </div>

        </main>
    </div>
    <!-- /Main -->

</x-dash-layout>
