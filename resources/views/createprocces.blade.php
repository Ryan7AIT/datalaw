<x-dash-layout>

    <div class="edit   h-full overflow-hidden pl-10 ">
        <main id="dashboard-main" class="h-[calc(100vh-8rem)] overflow-auto px-4 py-10">

            <div class="head sm:flex sm:items-center sm:justify-between flex-col sm:flex-row">
                <p class="flex-1 text-base font-bold text-gray-900">Ajouter Un traitment</p>

                {{-- <button class="m-2 inline-flex items-center justify-center rounded-xl border border-transparent bg-blue-600 px-5 py-3 font-medium text-white hover:bg-blue-700"> Ajouter </button> --}}


            </div>

            <livewire:show-create-procees/>
        </main>
    </div>
</x-dash-layout>
