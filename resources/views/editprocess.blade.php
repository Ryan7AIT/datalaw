<x-dash-layout>

    <div class="edit   h-full overflow-hidden pl-10 ">
        <main id="dashboard-main" class="h-[calc(100vh-8rem)] overflow-auto px-4 py-10">

            <div class="head sm:flex sm:items-center sm:justify-between flex-col sm:flex-row">
                <p class="flex-1 text-base font-bold text-gray-900">Details de traitment</p>

            </div>

            <livewire:process.show-edit-process :process="$process"/>
        </main>
    </div>
</x-dash-layout>
