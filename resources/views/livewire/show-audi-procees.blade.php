<div>
    <div class="edit   h-full overflow-hidden pl-10 ">
        <main id="dashboard-main" class="h-[calc(100vh-8rem)] overflow-auto px-4 py-10">

            <div class="mx-4 max-w-screen-xl sm:mx-8 xl:mx-auto">
            <h1 class="border-b py-6 text-4xl font-semibold">Audit De Traitment</h1>
            <div class="grid grid-cols-8 pt-3 pb-10 sm:grid-cols-10">



                <div class="col-span-8 overflow-hidden rounded-xl sm:bg-gray-50 sm:px-8 sm:shadow">
                <div class="pt-4">
                    <h1 class="py-2 text-2xl font-semibold">{{$audit->process->nom}}</h1>
                    <!-- <p class="font- text-slate-600">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p> -->
                </div>
                <hr class="mt-4 mb-8" />
                <p class="py-2 text-xl font-semibold">Auditeur</p>
                <div class="space-y-2">
                    <div class="cursor-pointer rounded-md border bg-white px-6 py-2 text-2xl hover:bg-blue-50">{{$audit->user->name}} </div>
                </div>
                <hr class="mt-4 mb-8" />
                <p class="py-2 text-xl font-semibold">Detail Audit</p>
                <div class="space-y-1">

                        <div x-cloak x-data="{ open: false }"  class="rounded-md border bg-white">

                                <div @click="open = !open" class="flex w-full items-center px-6 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                    </svg>
                                    <span  class="cursor-pointer"> Base legal</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5 cursor-pointer text-gray-400 active:scale-95" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>


                                        <div x-transition x-show="open" class="flex transition flex-col space-y-3 px-4 py-6 sm:px-10">

                                            <div class="">

                                                <div class="mx-auto mt-8  px-2">


                                                <div class="mt-6 overflow-hidden rounded-xl border shadow">
                                                    <table class="min-w-full border-separate border-spacing-y-2 border-spacing-x-2">
                                                        <thead class="hidden border-b lg:table-header-group">
                                                            <tr class="">

                                                            <td width="50%" class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Titre</td>

                                                            <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Total</td>

                                                            <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Etat de la tache</td>

                                                            <td width class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6 w-16"></td>


                                                            </tr>
                                                        </thead>

                                                        <tbody class="lg:border-gray-300">
                                                            @foreach ( $audit->articles as $artcile)
                                                            @if ($artcile->category == 'base legal')

                                                                <tr class="">
                                                                    <td wire:click="showSideBar({{$artcile->id}})"  width="50%" class="whitespace-no-wrap cursor-pointer py-2 text-sm font-bold text-gray-900 sm:px-6">
                                                                        {{$artcile->title}}

                                                                    </td>

                                                                    <td class="whitespace-no-wrap hidden py-2 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                        <p>{{$artcile->rules()->count() }}</p>
                                                                    </td>



                                                                    <td class="whitespace-no-wrap hidden py-2 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                        <div class="inline-flex items-center rounded-full bg-blue-600 py-2 px-3 text-xs text-white">En cours</div>
                                                                    </td>

                                                                    <td class="whitespace-no-wrap hidden py-2 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                        <input wire:click="toggleArticleStatus({{$artcile->id}})" wire:model="articleStatuses.{{ $artcile->id }}" type="checkbox">
                                                                    </td>
                                                                </tr>
                                                                @endif

                                                            @endforeach





                                                        </tbody>
                                                    </table>
                                                </div>
                                                </div>

                                            </div>
                                        </div>


                        </div>


                        <div x-cloak x-data="{ open: false }"  class="rounded-md border bg-white">

                            <div @click="open = !open"  class="flex w-full items-center px-6 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span class="cursor-pointer"> Confidentialite</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5 cursor-pointer text-gray-400 active:scale-95" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </div>


                                    <div x-transition x-show="open" class="flex transition flex-col space-y-3 px-4 py-6 sm:px-10">

                                        <div class="">

                                            <div class="mx-auto mt-8  px-2">


                                            <div class="mt-6 overflow-hidden rounded-xl border shadow">
                                                <table class="min-w-full border-separate border-spacing-y-2 border-spacing-x-2">
                                                    <thead class="hidden border-b lg:table-header-group">
                                                        <tr class="">

                                                        <td width="50%" class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Titre</td>

                                                        <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Total</td>

                                                        <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Etat de la tache</td>

                                                        <td width class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6 w-16"></td>


                                                        </tr>
                                                    </thead>

                                                    <tbody class="lg:border-gray-300">
                                                        @foreach ( $audit->articles as $artcile)
                                                        @if ($artcile->category == 'confidentialite')

                                                            <tr class="">
                                                                <td wire:click="showSideBar({{$artcile->id}})"  width="50%" class="whitespace-no-wrap cursor-pointer py-4 text-sm font-bold text-gray-900 sm:px-6">
                                                                    {{$artcile->title}}

                                                                </td>

                                                                <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                    <p>{{$artcile->rules()->count() }}</p>
                                                                </td>



                                                                <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                    <div class="inline-flex items-center rounded-full bg-blue-600 py-2 px-3 text-xs text-white">En cours</div>
                                                                </td>

                                                                <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                    <input wire:click="toggleArticleStatus({{$artcile->id}})" wire:model="articleStatuses.{{ $artcile->id }}" type="checkbox">
                                                                </td>
                                                            </tr>
                                                            @endif

                                                        @endforeach





                                                    </tbody>
                                                </table>
                                            </div>
                                            </div>

                                        </div>
                                    </div>


                        </div>

                        <div x-cloak x-data="{ open: false }"  class="rounded-md border bg-white">

                            <div @click="open = !open"  class="flex w-full items-center px-6 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span class="cursor-pointer"> Donnees interdit</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5 cursor-pointer text-gray-400 active:scale-95" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </div>


                                    <div x-transition x-show="open" class="flex transition flex-col space-y-3 px-4 py-6 sm:px-10">

                                        <div class="">

                                            <div class="mx-auto mt-8  px-2">


                                            <div class="mt-6 overflow-hidden rounded-xl border shadow">
                                                <table class="min-w-full border-separate border-spacing-y-2 border-spacing-x-2">
                                                    <thead class="hidden border-b lg:table-header-group">
                                                        <tr class="">

                                                        <td width="50%" class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Titre</td>

                                                        <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Total</td>

                                                        <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Etat de la tache</td>

                                                        <td width class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6 w-16"></td>


                                                        </tr>
                                                    </thead>

                                                    <tbody class="lg:border-gray-300">
                                                        @foreach ( $audit->articles as $artcile)
                                                        @if ($artcile->category == 'donnees interdit')

                                                            <tr class="">
                                                                <td wire:click="showSideBar({{$artcile->id}})"  width="50%" class="whitespace-no-wrap cursor-pointer py-4 text-sm font-bold text-gray-900 sm:px-6">
                                                                    {{$artcile->title}}

                                                                </td>

                                                                <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                    <p>{{$artcile->rules()->count() }}</p>

                                                                </td>



                                                                <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                    <div class="inline-flex items-center rounded-full bg-blue-600 py-2 px-3 text-xs text-white">En cours</div>
                                                                </td>

                                                                <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                    <input wire:click="toggleArticleStatus({{$artcile->id}})" wire:model="articleStatuses.{{ $artcile->id }}" type="checkbox">
                                                                </td>
                                                            </tr>
                                                            @endif

                                                        @endforeach





                                                    </tbody>
                                                </table>
                                            </div>
                                            </div>

                                        </div>
                                    </div>


                        </div>

                        <div x-cloak x-data="{ open: false }"  class="rounded-md border bg-white">

                            <div @click="open = !open"  class="flex w-full items-center px-6 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span class="cursor-pointer"> Droit des personnes</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5 cursor-pointer text-gray-400 active:scale-95" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </div>


                            <div x-transition x-show="open" class="flex transition flex-col space-y-3 px-4 py-6 sm:px-10">

                                <div class="">

                                    <div class="mx-auto mt-8  px-2">


                                    <div class="mt-6 overflow-hidden rounded-xl border shadow">
                                        <table class="min-w-full border-separate border-spacing-y-2 border-spacing-x-2">
                                            <thead class="hidden border-b lg:table-header-group">
                                                <tr class="">

                                                <td width="50%" class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Titre</td>

                                                <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Total</td>

                                                <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Etat de la tache</td>

                                                <td width class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6 w-16"></td>


                                                </tr>
                                            </thead>

                                            <tbody class="lg:border-gray-300">
                                                @foreach ( $audit->articles as $artcile)
                                                @if ($artcile->category == 'droit des personnes')

                                                    <tr class="">
                                                        <td wire:click="showSideBar({{$artcile->id}})"  width="50%" class="whitespace-no-wrap cursor-pointer py-4 text-sm font-bold text-gray-900 sm:px-6">
                                                            {{$artcile->title}}

                                                        </td>

                                                        <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                            <p>{{$artcile->rules()->count() }}</p>
                                                        </td>



                                                        <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                            <div class="inline-flex items-center rounded-full bg-blue-600 py-2 px-3 text-xs text-white">En cours</div>
                                                        </td>

                                                        <td class="whitespace-no-wrap hidden py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                            <input wire:click="toggleArticleStatus({{$artcile->id}})" wire:model="articleStatuses.{{ $artcile->id }}" type="checkbox">
                                                        </td>
                                                    </tr>
                                                    @endif

                                                @endforeach





                                            </tbody>
                                        </table>
                                    </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <div x-cloak x-data="{ open: false }"  class="rounded-md border bg-white">

                            <div @click="open = !open"  class="flex w-full items-center px-6 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                                <span class="cursor-pointer"> Principe</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-auto h-5 w-5 cursor-pointer text-gray-400 active:scale-95" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </div>


                            <div x-transition x-show="open" class="flex transition flex-col space-y-3 px-4 py-6 sm:px-10">

                                <div class="">

                                    <div class="mx-auto mt-8  px-2">


                                    <div class="mt-6 overflow-hidden rounded-xl border shadow">
                                        <table class="min-w-full border-separate border-spacing-y-2 border-spacing-x-2">
                                            <thead class="hidden border-b lg:table-header-group">
                                                <tr class="">

                                                <td width="50%" class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Titre</td>

                                                <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Total</td>

                                                <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Etat de la tache</td>

                                                <td width class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6 w-16"></td>


                                                </tr>
                                            </thead>

                                            <tbody class="lg:border-gray-300">
                                                @foreach ( $audit->articles as $artcile)
                                                    @if ($artcile->category == 'principe')

                                                        <tr class="">
                                                            <td wire:click="showSideBar({{$artcile->id}})"  width="50%" class="whitespace-no-wrap cursor-pointer py-2 text-sm font-bold text-gray-900 sm:px-6">
                                                                {{$artcile->title}}

                                                            </td>

                                                            <td class="whitespace-no-wrap hidden py-2 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                <p>{{$artcile->rules()->count() }}</p>
                                                            </td>



                                                            <td class="whitespace-no-wrap hidden py-2 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                <div class="inline-flex items-center rounded-full bg-blue-600 py-2 px-3 text-xs text-white">En cours</div>
                                                            </td>

                                                            <td class="whitespace-no-wrap hidden py-2 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                                                                <input wire:click="toggleArticleStatus({{$artcile->id}})" wire:model="articleStatuses.{{ $artcile->id }}" type="checkbox">
                                                            </td>
                                                        </tr>
                                                        @endif

                                                @endforeach





                                            </tbody>
                                        </table>
                                    </div>
                                    </div>

                                </div>
                            </div>


                        </div>




                </div>

                <hr class="mt-4 mb-8" />
                </div>
            </div>
            </div>


        </main>
    </div>


    @if($showLeftBar)

        <div class="h-full overflow-hidden">
            <main id="dashboard-main" class="fixed overflow-auto top-0 right-0 w-4/5 border shadow z-50 bg-white h-full transition transition-div @if($showLeftBar) active       @endif">
                <div class="title flex justify-between border-b-2 border-gray-200 py-3 px-6 ali align-middle ">
                    <h2>Detail Audit</h2>
                    <div class="btns flex">
                        <button wire:click="hideSideBar" class="m-2 inline-flex items-center justify-center rounded-xl border border-transparent bg-blue-600 px-5 py-2 font-medium text-white hover:bg-blue-700"> Ok </button>
                        <button  wire:click="hideSideBar" class="m-2 inline-flex items-center justify-center rounded-xl border bg-white px-5 py-2 font-medium text-blue-600 shadow hover:bg-blue-50"> Annuler </button>

                    </div>
                </div>

                <div class="desc px-6 py-4 mt-8">
                    <h4 class="text-gray-400 mt-2">Categorie</h4>
                    <p>{{$article->category}}</p>

                    <h4 class="text-gray-400 mt-2">Total</h4>
                    <p>{{$article->rules()->count() }}</p>

                    <h4 class="text-gray-400 mt-2">Etat de la tache</h4>
                    <p>En cour</p>


                    <h4 class="text-gray-400 mt-2">Description</h4>
                    <p>{{$article->description}}</p>


                    <h4 class="text-gray-400 mt-2">Titre</h4>
                    <p>{{$article->title}}</p>
                </div>

                <div class="verification px-6 py-4 mt-8">
                    <h1 class="font-semibold text-lg">Verification additionnelles</h1>



                    <ul class="list-decimal mt-4  ml-10">
                        @foreach ($article->rules as $rule)

                                <li class="py-1  font-semibold text-gray-900 sm:px-6">
                                        {{$rule->title}}

                                </li>

                            @endforeach
                    </ul>
                </div>

                <div class="memo  px-6 py-4 mt-8">
                    <h4 class="text-gray-400 mt-2">Memo</h4>
                    <p class="pl-4 leading-8 ">{{$article->memo}}</p>
                </div>
            </main>

        </div>

    @endif

    @if (session()->has('message'))

        <!-- Success -->
        <div

            x-transition:enter.duration.400ms
            x-transition:leave.duration.300ms
            x-transition
            x-data="{ show: true }"
            x-show="show"
            x-init="setTimeout(() => show = false, 3000)"


            class="fixed transition bottom-0 right-2 m-2 my-8 max-w-sm rounded-lg border border-gray-100 bg-white px-12 py-6 shadow-md">
            <button class="absolute top-0 right-0 p-4 text-gray-400">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
            <p class="relative mb-1 text-sm font-medium">
              <span class="absolute -left-7 flex h-5 w-5 items-center justify-center rounded-xl bg-green-400 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-3 w-3">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
              </span>
              <span class="text-gray-700">Created successfuly!</span>
            </p>
            <p class="text-sm text-gray-600">{{ session('message') }}</p>
        </div>
          <!-- /Success -->
    @endif
</div>
