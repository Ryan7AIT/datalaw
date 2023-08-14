<!-- Main -->
<x-dash-layout>

    <div class="h-full overflow-hidden pl-10">
        <main id="dashboard-main" class="h-[calc(100vh-8rem)] overflow-auto px-4 py-10">
        <!-- Put your content inside of the <main/> tag -->
        <h1 class="text-2xl font-black text-gray-800">Bienvenu!</h1>
        <p class="mb-6 text-gray-600">notre solution complète de mise en conformité à la loi 18-07 sur la protection des données à caractère personnel.</p>
        <div class="flex flex-wrap gap-x-4 gap-y-8">
            <div class="h-56 w-72 rounded-xl bg-white text-gray-700 p-10 shadow-md text-center font-medium text-xl">
                <p >Nombre de traitement</p>
                <br>
                <span class="text-gray-900 font-semibold">{{$proceessCount}}</span>
            </div>
            <div class="h-56 w-72 rounded-xl text-red-700 bg-white p-10 shadow-md text-center  font-medium text-xl">
                <p >Nombre de violation</p>
                <br>
                <span class="text-gray-900 font-semibold">0</span>
            </div>
            <div class="h-56 w-full rounded-xl bg-white p-10 shadow-md"></div>
            <div class="h-56 w-full rounded-xl bg-white p-10 shadow-md"></div>
            <div class="h-56 w-full rounded-xl bg-white p-10 shadow-md"></div>
        </div>
        </main>
    </div>
    <!-- /Main -->

</x-dash-layout>
