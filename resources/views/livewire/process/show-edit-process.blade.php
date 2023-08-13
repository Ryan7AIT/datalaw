<div class="details  mt-6  bg-white rounded-xl border shadow  w-full  m-auto">
    <div class="w-full  mx-auto">
          <nav class="flex flex-wrap gap-2 ">
            <button wire:click="$set('active', 'description')" class=" {{$active == 'description' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent py-2 px-3 text-sm font-medium  transition-all duration-200 ease-in-out hover:border-b-purple-600 hover:text-purple-600"> Description </button>

            <button  wire:click="$set('active', 'fond')"class=" {{$active == 'fond' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent py-2 px-3 text-sm font-medium text-gray-600 transition-all duration-200 ease-in-out hover:border-b-purple-600 hover:text-purple-600"> Fondement legal  </button>

            <button  wire:click="$set('active', 'a141')"class=" {{$active == 'a141' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent  py-2 px-2 text-sm font-semibold  hover:text-purple-600 hover:border-b-purple-600 transition-all duration-200 ease-in-out"> Art 14.1 </button>

            <button  wire:click="$set('active', 'a142')"class=" {{$active == 'a142' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent  py-2 px-2 text-sm font-medium hover:text-purple-600 hover:border-b-purple-600 transition-all duration-200 ease-in-out"> Art 14.2 </button>

            <button wire:click="$set('active', 'a143')" class=" {{$active == 'a143' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent  py-2 px-2 text-sm font-medium hover:text-purple-600 hover:border-b-purple-600 transition-all duration-200 ease-in-out"> Art 14.3 </button>

            <button wire:click="$set('active', 'a144')" class=" {{$active == 'a144' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent  py-2 px-2 text-sm font-medium hover:text-purple-600 hover:border-b-purple-600 transition-all duration-200 ease-in-out"> Art 14.4 </button>

            <button wire:click="$set('active', 'a145')" class=" {{$active == 'a145' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent  py-2 px-2 text-sm font-medium hover:text-purple-600 hover:border-b-purple-600 transition-all duration-200 ease-in-out"> Art 14.5 </button>

            <button wire:click="$set('active', 'a146')" class=" {{$active == 'a146' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent  py-2 px-2 text-sm font-medium hover:text-purple-600 hover:border-b-purple-600 transition-all duration-200 ease-in-out"> Art 14.6 </button>

            <button  wire:click="$set('active', 'a147')"class=" {{$active == 'a147' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent  py-2 px-2 text-sm font-medium hover:text-purple-600 hover:border-b-purple-600 transition-all duration-200 ease-in-out"> Art 14.7 </button>

            <button  wire:click="$set('active', 'a148')"class=" {{$active == 'a148' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent  py-2 px-2 text-sm font-medium hover:text-purple-600 hover:border-b-purple-600 transition-all duration-200 ease-in-out"> Art 14.8 </button>

            <button  wire:click="$set('active', 'a149')"class=" {{$active == 'a149' ? 'text-purple-600 border-b-purple-600 font-semibold' : 'text-gray-600 font-medium'}} inline-flex whitespace-nowrap border-b-2 border-transparent  py-2 px-2 text-sm font-medium hover:text-purple-600 hover:border-b-purple-600 transition-all duration-200 ease-in-out"> Art 14.9 </button>
          </nav>
      </div>

      <div class="body px-4 py-6">



        {{-- descritpion --}}

        @if($active == 'description')
        <form>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600  peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nom de traitment</label>
            </div>

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your thoughts here..."></textarea>


            <button type="submit" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Modifier</button>
        </form>

        {{-- fond --}}
        @elseif($active == 'fond')

        <div class="bg-white rounded-md rounded-t-none px-2 py-4  " >

            <ul class=" leading-6  text-left  py-2 mx-auto text-sm  mt-4 font-medium text-gray-900   ">
                <li class="w-full  rounded-t-lg ">
                    <div class="flex items-center pl-3">
                        <input wire:model="a71" id="chbx1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                        <label for="chbx1" class="w-full py-3 ml-2 pl-4 text-sm font-medium text-gray-900 ">Le Consentement experes de la personne concerne</label>
                    </div>
                </li>
                <li class="w-full  rounded-t-lg">
                    <div class="flex items-center pl-3">
                        <input wire:model="a72" id="chbx12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                        <label for="chbx12" class="w-full py-3 ml-2 pl-4 text-sm font-medium text-gray-900 ">Le respect d'une obligation legal</label>
                    </div>

                </li>
                <li class="w-full  rounded-t-lg ">

                    <div class="flex items-center pl-3">
                        <input wire:model="a73" id="chbx13" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                        <label for="chbx13" class="w-full py-3 ml-2 pl-4 text-sm font-medium text-gray-900 ">La sauvgarde de la vie de la personne</label>
                    </div>
                </li>

                <li class="w-full  rounded-t-lg ">
                    <div class="flex items-center pl-3">
                        <input wire:model="a74" id="chbx4" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500    focus:ring-2 ">
                        <label for="chbx4" class="leading-8  w-full py-3 pl-4 ml-2 text-sm font-medium text-gray-900 "> l'exécution d'un contrat ou precontrat a la demande de la personne</label>
                    </div>
                </li>

                <li class="w-full rounded-t-lg ">
                    <div class="flex items-center pl-3">
                        <input wire:model='b71' id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                        <label for="vue-checkbox" class="leading-8 pl-4 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">La suvgarde d'interet vitaux de la personne</label>
                    </div>
                </li>
                <li class="w-full rounded-t-lg">
                    <div class="flex items-center pl-3">
                        <input wire:model='b72' id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2 ">
                        <label for="react-checkbox" class="leading-8 pl-4 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">L'exuction d'une mission d'interet public</label>
                    </div>
                </li>
                <li class="w-full rounded-t-lg ">
                    <div class="flex items-center pl-3">
                        <input wire:model='b73' id="angular-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500    focus:ring-2 ">
                        <label for="angular-checkbox" class="leading-8 pl-4 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">La realisation d'un interet legetim poursuivi par le responsable du traitment</label>
                    </div>
                </li>




            </ul>

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Lorsque le traitment est fonde sur les interet legitime, indiquez les interet legitime poursuivis par le responsable du traitment</label>
            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your thoughts here..."></textarea>



        </div>

        @elseif($active == 'a141')


        <div class="mx-4  max-w-screen-xl sm:mx-8 xl:mx-auto">
        <div class="">


            <div class="col-span-8 rounded-xl  sm:px-8 ">


            <div class="mb-10 grid gap-y-8 lg:grid-cols-2 lg:gap-y-0">
                <div class="space-y-8">
                <div class="">
                    <div class="flex">
                    <p class="font-medium mb-1">Responsable de traitment</p>
                    <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                    </div>
                    <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                    <p class="ml-4 w-56">
                        <strong class="block text-lg font-medium">Centre d'affaire El Qods</strong>
                        <span class="text-xs text-gray-400"> Cheraga 16000</span>
                        <span class="text-xs text-gray-400"> Alger</span>

                    </p>
                    </div>
                </div>
                <div class="">
                    <div class="flex">
                    <p class="font-medium mb-1">Data Protection officier</p>
                    <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                    </div>
                    <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                    <img class="h-10 object-contain pl-4" src="/images/kt10d0A1TgzZpAoNM_YPX.png" alt="" />
                    <p class="ml-4 w-56">
                        <strong class="block text-lg font-medium">Ryan AIT MECHEDAL </strong>
                        <strong class="block text-lg font-medium">0123-56-78-89 </strong>
                        <span class="text-xs text-gray-400">ryan@gmail.com</span>
                    </p>
                    </div>
                </div>
                </div>

                <div class="grid gap-y-6 gap-x-3 sm:grid-cols-2 lg:px-8">
                <label class="block sm:col-span-2" for="name">
                    <p class="text-sm">Representant Du responsable</p>
                    <input class="w-full  mt-2 rounded-md border bg-white py-2 px-2 outline-none ring-blue-600 focus:ring-1" type="text" value="Shakir Ali" />
                </label>
                <label class="block sm:col-span-2" for="name">
                    <p class="text-sm">Responsable conjoint</p>
                    <input class="w-full mt-2 rounded-md border bg-white py-2 px-2 outline-none ring-blue-600 focus:ring-1" type="text" value="shakir.ali@corpora.de" />
                </label>

                </div>
            </div>

            <div class="amx-auto mb-10 overflow-hidden rounded-lg border bg-white">
                <p class="mb-6 bg-gray-100 py-1 text-center text-lg font-medium">Text de l'article </p>
                <p class="text-gray-700 f font-medium px-6 leading-8 py-4">La déclaration doit comprendre :
                    le nom et l'adresse du responsable du traitement et, le
                    cas échéant, ceux de son représentant</p>
            </div>
            </div>
        </div>
        </div>


        @elseif($active == 'a142')


        <div class="mx-4  max-w-screen-xl sm:mx-8 xl:mx-auto">
        <div class="">


            <div class="col-span-8 rounded-xl  sm:px-8 ">


            <div class="mb-10 grid gap-y-8 gap-x-8 lg:grid-cols-2 lg:gap-y-0">
                <div class="space-y-8">
                    <div class="">
                        <div class="flex">
                        <p class="font-medium mb-1">Nature du traitment</p>
                        <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                        </div>
                        <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                        <p class="mx-4 w-full">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quibusdam consequatur aspernatur, rerum enim commodi dolorum nisi eius, quos doloribus reprehenderit libero nam non maxime rem ex dolores! Perspiciatis, accusamus?

                        </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex">
                        <p class="font-medium mb-1">Caraterestique du traitment</p>
                        <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                        </div>
                        <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                        <img class="h-10 object-contain pl-4" src="/images/kt10d0A1TgzZpAoNM_YPX.png" alt="" />
                        <p class="mx-4 ">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque nulla, quam delectus distinctio voluptas nemo assumenda obcaecati praesentium nobis architecto placeat. Sint, similique pariatur magni ut nostrum cumque cupiditate voluptatibus?
                        </p>
                        </div>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="">
                        <div class="flex">
                        <p class="font-medium mb-1">Finalite du traitment</p>
                        <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                        </div>
                        <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                        <p class="mx-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quibusdam consequatur aspernatur, rerum enim commodi dolorum nisi eius, quos doloribus reprehenderit libero nam non maxime rem ex dolores! Perspiciatis, accusamus?

                        </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex">
                        <p class="font-medium mb-1">Caraterestique du traitment</p>
                        <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                        </div>
                        <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                        <img class="h-10 object-contain pl-4" src="/images/kt10d0A1TgzZpAoNM_YPX.png" alt="" />
                        <p class="mx-4 ">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque nulla, quam delectus distinctio voluptas nemo assumenda obcaecati praesentium nobis architecto placeat. Sint, similique pariatur magni ut nostrum cumque cupiditate voluptatibus?
                        </p>
                        </div>
                    </div>
                    </div>
            </div>

            <div class="amx-auto mb-10 overflow-hidden rounded-lg border bg-white">
                <p class="mb-6 bg-gray-100 py-1 text-center text-lg font-medium">Text de l'article </p>
                <p class="text-gray-700 f font-medium px-6 leading-8 py-4">La déclaration doit comprendre :
                    la nature, les caractéristiques et la ou les finalités du traitement envisagé.
                </p>
            </div>
            </div>
        </div>
        </div>


        @elseif($active == 'a143')


        <div class="mx-4  max-w-screen-xl sm:mx-8 xl:mx-auto">
        <div class="">


            <div class="col-span-8 rounded-xl  sm:px-8 ">


            <div class="mb-10 grid gap-y-8 gap-x-8 lg:grid-cols-1 lg:gap-y-0">
                <div class="space-y-8">
                    <div class="">
                        <div class="flex">
                        <p class="font-medium mb-1">Categorie des personnes concernees et des donnes a carecter personelle s'y raportant</p>
                        <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                        </div>
                        <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                        <p class="mx-4 w-full">
                            Stagiere,
                            Personnels de lentripirse

                        </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex">
                        <p class="font-medium mb-1">donnes a carecter personelle  traiter</p>
                        <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                        </div>
                        <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                        <img class="h-10 object-contain pl-4" src="/images/kt10d0A1TgzZpAoNM_YPX.png" alt="" />
                        <p class="mx-4 ">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque nulla, quam delectus distinctio voluptas nemo assumenda obcaecati praesentium nobis architecto placeat. Sint, similique pariatur magni ut nostrum cumque cupiditate voluptatibus?
                        </p>
                        </div>
                    </div>
                </div>


            </div>

            <div class="amx-auto mb-10 overflow-hidden rounded-lg border bg-white">
                <p class="mb-6 bg-gray-100 py-1 text-center text-lg font-medium">Text de l'article </p>
                <p class="text-gray-700 f font-medium px-6 leading-8 py-4">une description de la ou des catégories de personnes
                    concernées et des données ou des catégories de données à
                    caractère personnel s'y rapportant.
                </p>
            </div>
            </div>
        </div>
        </div>


        @elseif($active == 'a144')


        <div class="mx-4  max-w-screen-xl sm:mx-8 xl:mx-auto">
        <div class="">


            <div class="col-span-8 rounded-xl  sm:px-8 ">


            <div class="mb-10 grid gap-y-8 gap-x-8 lg:grid-cols-1 lg:gap-y-0">
                <div class="space-y-8">
                    <div class="">
                        <div class="flex">
                        <p class="font-medium mb-1">Destinataires ou les categorie de destinataire auxquelle les donnes sont suseptible d'etre communiquer </p>
                        <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                        </div>
                        <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                        <p class="mx-4 w-full">
                            Stagiere,
                            Personnels de lentripirse

                        </p>
                        </div>
                    </div>

                </div>


            </div>

            <div class="amx-auto mb-10 overflow-hidden rounded-lg border bg-white">
                <p class="mb-6 bg-gray-100 py-1 text-center text-lg font-medium">Text de l'article </p>
                <p class="text-gray-700 f font-medium px-6 leading-8 py-4">les destinataires, ou les catégories de destinataires
                    auxquels les données sont susceptibles d'être
                    communiquées .
                </p>
            </div>
            </div>
        </div>
        </div>

        @elseif($active == 'a145')


        <div class="mx-4  max-w-screen-xl sm:mx-8 xl:mx-auto">
        <div class="">


            <div class="col-span-8 rounded-xl  sm:px-8 ">


            <div class="mb-10 grid gap-y-8 gap-x-8 lg:grid-cols-1 lg:gap-y-0">
                <div class="space-y-8">
                    <div class="">
                        <div class="flex">
                        <p class="font-medium mb-1">la nature des données dont le transfert vers des pays
                            étrangers est envisagé: </p>
                        <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                        </div>
                        <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                        <p class="mx-4 w-full">
                            Stagiere,
                            Personnels de lentripirse

                        </p>
                        </div>
                    </div>

                </div>


            </div>

            <div class="amx-auto mb-10 overflow-hidden rounded-lg border bg-white">
                <p class="mb-6 bg-gray-100 py-1 text-center text-lg font-medium">Text de l'article </p>
                <p class="text-gray-700 f font-medium px-6 leading-8 py-4"> la nature des données dont le transfert vers des pays
                    étrangers est envisagé .
                </p>
            </div>
            </div>
        </div>
        </div>

        @elseif($active == 'a146')


        <div class="mx-4  max-w-screen-xl sm:mx-8 xl:mx-auto">
            <div class="">


                <div class="col-span-8 rounded-xl  sm:px-8 ">


                <div class="mb-10 grid gap-y-8 gap-x-8 lg:grid-cols-1 lg:gap-y-0">
                    <div class="space-y-8">
                        <div class="">
                            <div class="flex">
                            <p class="font-medium mb-1">la durée de conservation des données: </p>
                            <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                            </div>
                            <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                            <p class="mx-4 w-full">
                                Stagiere,
                                Personnels de lentripirse

                            </p>
                            </div>
                        </div>

                    </div>


                </div>

                <div class="amx-auto mb-10 overflow-hidden rounded-lg border bg-white">
                    <p class="mb-6 bg-gray-100 py-1 text-center text-lg font-medium">Text de l'article </p>
                    <p class="text-gray-700 f font-medium px-6 leading-8 py-4"> la durée de conservation des données.
                    </p>
                </div>
                </div>
            </div>
            </div>


            @elseif($active == 'a147')


            <div class="mx-4  max-w-screen-xl sm:mx-8 xl:mx-auto">
            <div class="">


                <div class="col-span-8 rounded-xl  sm:px-8 ">


                <div class="mb-10 grid gap-y-8 gap-x-8 lg:grid-cols-1 lg:gap-y-0">
                    <div class="space-y-8">
                        <div class="">
                            <div class="flex">
                            <p class="font-medium mb-1">le service auprès duquel la personne concernée pourra exercer des droits: </p>
                            <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                            </div>
                            <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                            <p class="mx-4 w-full">
                                HR

                            </p>
                            </div>
                        </div>


                        <div class="">
                            <div class="flex">
                            <p class="font-medium mb-1">Mesures prisse pour faciliter l'exercice de ceux ci: </p>
                            <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                            </div>
                            <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                            <p class="mx-4 w-full">
                                Formulaire de contact ou email address

                            </p>
                            </div>
                        </div>


                    </div>


                </div>

                <div class="amx-auto mb-10 overflow-hidden rounded-lg border bg-white">
                    <p class="mb-6 bg-gray-100 py-1 text-center text-lg font-medium">Text de l'article </p>
                    <p class="text-gray-700 f font-medium px-6 leading-8 py-4"> le service auprès duquel la personne concernée pourra
                        exercer, le cas échéant, les droits qui lui sont reconnus par
                        les dispositions de la présente loi, ainsi que les mesures
                        prises pour faciliter l'exercice de ceux-ci .
                    </p>
                </div>
                </div>
            </div>
            </div>

            @elseif($active == 'a148')


            <div class="mx-4  max-w-screen-xl sm:mx-8 xl:mx-auto">
            <div class="">


                <div class="col-span-8 rounded-xl  sm:px-8 ">


                <div class="mb-10 grid gap-y-8 gap-x-8 lg:grid-cols-1 lg:gap-y-0">
                    <div class="space-y-8">
                        <div class="">
                            <div class="flex">
                            <p class="font-medium mb-1">une description générale permettant d'apprécier de
                                façon préliminaire le caractère approprié des mesures
                                prises pour assurer la confidentialité et la sécurité du
                                traitement: </p>
                            <button class="ml-auto inline-flex text-sm font-semibold text-blue-600 underline decoration-2">Change</button>
                            </div>
                            <div class="flex items-center rounded-md border border-gray-100 bg-white py-3 shadow">
                            <p class="mx-4 w-full">
                                HR

                            </p>
                            </div>
                        </div>





                    </div>


                </div>

                <div class="amx-auto mb-10 overflow-hidden rounded-lg border bg-white">
                    <p class="mb-6 bg-gray-100 py-1 text-center text-lg font-medium">Text de l'article </p>
                    <p class="text-gray-700 f font-medium px-6 leading-8 py-4">une description générale permettant d'apprécier de
                        façon préliminaire le caractère approprié des mesures
                        prises pour assurer la confidentialité et la sécurité du
                        traitement.
                    </p>
                </div>
                </div>
            </div>
            </div>

            @elseif($active == 'a149')


            <div class="mx-4  max-w-screen-xl sm:mx-8 xl:mx-auto">
            <div class="">


                <div class="col-span-8 rounded-xl  sm:px-8 ">


                <div class="mb-10 grid gap-y-8 gap-x-8 lg:grid-cols-1 lg:gap-y-0">
                    <div class="space-y-8">
                        TO DO


                    </div>


                </div>

                <div class="amx-auto mb-10 overflow-hidden rounded-lg border bg-white">
                    <p class="mb-6 bg-gray-100 py-1 text-center text-lg font-medium">Text de l'article </p>
                    <p class="text-gray-700 f font-medium px-6 leading-8 py-4">les interconnexions, ou toutes autres formes de
                        rapprochement des données ainsi que leur cession à des
                        tiers ou sous-traitance, sous toute forme, à titre gratuit ou
                        onéreux.
                    </p>
                </div>
                </div>
            </div>
            </div>



            @endif


      </div>

</div>
