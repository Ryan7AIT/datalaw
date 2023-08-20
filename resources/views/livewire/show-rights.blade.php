<div x-data="{ showAddStep: false }" >
        <div class="">

        <div class="mx-auto mt-8 max-w-screen-lg px-2">
          <div class="sm:flex sm:items-center sm:justify-between flex-col sm:flex-row">
            <p class="flex-1 text-base font-bold text-gray-900">Demande Droits</p>

            <div class="mt-4 sm:mt-0">
              <div class="flex items-center justify-start sm:justify-end">
                    <button

                    x-on:click="showAddStep= true"

                    class="m-2 inline-flex items-center justify-center rounded-xl border border-transparent bg-blue-600 px-5 py-3 font-medium text-white hover:bg-blue-700"> Nouveau </button>

              </div>
            </div>
          </div>

          <div class="mt-6  bg-white rounded-xl border shadow">
            <table class="w-full border-separate border-spacing-y-2 border-spacing-x-2">
              <thead class=" border-b lg:table-header-group">
                <tr class="">
                  {{-- <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-2 mx-auto text-center">Nom de la demande</td> --}}
                  <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-2 mx-auto text-center">La personne concernee </td>


                  <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-2 mx-auto text-center">Etat de la demande </td>
                  <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-2 mx-auto text-center">Email de La personne concernee </td>

                  <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-2 mx-auto text-center">Date de reciption de la demande</td>

                  <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-2 mx-auto text-center">Contrat</td>


                </tr>
              </thead>

              <tbody class="lg:border-gray-300">
               @forelse ($rights as $rights )

                <tr class="">
                  {{-- <td  class="whitespace-no-wrap py-4 text-sm font-bold  text-gray-900 sm:px-6">
                    {{$rights->name}}



                  </td> --}}

                  <td class="whitespace-no-wrap  py-4 text-sm font-normal  text-gray-500 sm:px-6 lg:table-cell">
                    {{$rights->ufname}}
                    {{$rights->ulname}}


                </td>

                  <td class="whitespace-no-wrap  py-4 text-sm font-normal  text-gray-500 sm:px-6 lg:table-cell">
                    {{$rights->status}}

                </td>

                  <td class="whitespace-no-wrap   py-4  px-6 text-sm text-gray-600 lg:text-left">
                    {{$rights->uemail}}

                  </td>

                  <td class="whitespace-no-wrap   py-4  px-6 text-sm text-gray-600 lg:text-left">
                    {{$rights->created_at->diffForHumans()}}

                  </td>

                <td  class="whitespace-no-wrap py-4 text-sm font-bold  text-gray-900 sm:px-6">
                    <a target="_blank" href="{{ asset('storage/' . $rights->path )}} ">Contart</a>

                  </td>


                </tr>

                @empty

                <tr class="">

                    <td class="whitespace-no-wrap  py-4 text-sm font-normal  text-red-400 sm:px-6 lg:table-cell">
                      pas de demandes de droit


                  </td>



                  </tr>
                @endforelse


              </tbody>
            </table>
          </div>
        </div>

        </div>

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

        <div
        x-show="showAddStep"
        class="fixed inset-0 transform transition-all"
        x-on:click="showAddStep= false"
        x-cloak
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        >
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
        <div
                x-show="showAddStep"
                class="fixed inset-0 transform transition-all"
                x-on:click="showAddStep= false"
                x-cloak
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                >
              <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>


        <div
              x-cloak
              x-on:keydown.escape.window="showAddStep = false"
              x-transition:enter="ease-out duration-300"
              x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
              x-transition:leave="ease-in duration-200"
              x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
              x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"



              x-show="showAddStep" x-transition  class="modal absolute  right-64 bottom-2 w-1/2 mr-32 z-50 transition ease-in-out bg-white text-black border rounded-lg py-8 px-6">
                <h2 class="text-center mb-4">Nevau droit</h2>
                <div class="closeModel pb-2 absolute top-2 right-4 font-bold">
                    <p @click="showAddStep = false" class="closeModel">

                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-400 cursor-pointer hover:text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>

                    </p>
                </div>


                <div class="lg:m-2">
                    <form wire:submit.prevent="submit" class="relative space-y-3 max-w-screen-md mx-auto  p-4  lg:p-6">

                        <div class="grid gap-3 md:grid-cols-2 space-x-8">
                            <div>
                                <label class=""> Prenome de la personne concerne </label>
                                <input  wire:model="fname" type="text" placeholder="Your Name" class="mt-2 h-12 w-full rounded-md bg-gray-100 px-3" />
                                @error('fname') <span class="error">{{ $message }}</span> @enderror

                            </div>
                            <div>
                                <label class=""> Nom de la personne concerne </label>
                                <input wire:model="lname" type="text" placeholder="Last  Name" class="mt-2 h-12 w-full rounded-md bg-gray-100 px-3" />
                                @error('lname') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div>
                            <label class=""> Email de la personne concerne </label>
                            <input wire:model="email" type="email" placeholder="Info@example.com" class="mt-2 h-12 w-full rounded-md bg-gray-100 px-3" />
                            @error('email') <span class="error">{{ $message }}</span> @enderror

                        </div>

                        <div>

                            <label for="message" class="block  mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea wire:model="description" id="message" rows="4" class="block resize-none p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your thoughts here..."></textarea>
                            @error('description') <span class="error">{{ $message }}</span> @enderror

                        </div>
                        <div class="grid gap-3 lg:grid-cols-2 space-x-8">
                        <div>

                            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Traitement</label>
                            <select wire:model="process" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach ($processes as $process )

                                <option value="{{$process->id}}" >{{$process->nom}}</option>
                                @endforeach


                            </select>

                        </div>
                        <div>

                                <label class="block mb-2 text-sm font-medium text-gray-900 " for="file_input">Document</label>
                                <input wire:model="docs" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" id="file_input" type="file">

                        </div>
                        </div>


                        <div>
                            <button @click="showAddStep = false" type="submit" class="mt-5 w-full rounded-md bg-blue-600 p-2 text-center font-semibold text-white">Ajouter</button>
                        </div>
                  </form>

                  </div>









        </div>




    </div>
