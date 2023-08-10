<x-dash-layout>
    
    <div class="h-full  pl-10" x-data="{showDesc: true}">
        <main id="dashboard-main" class=" px-4 py-10">
        <!-- Put your content inside of the <main/> tag -->
        <div class="h flex justify-between">
            <div class="">
                <h1 class="text-2xl font-black text-gray-800">Bienvenu!</h1>
                <p class="mb-6 text-gray-600">Ajouter un traitment</p>

            </div>

            <button  class="m-2   inline-flex items-center justify-center rounded-xl border border-transparent bg-blue-600 px-5 py-2 font-medium text-white hover:bg-blue-700"> Ajouter </button>
        </div>



        <div class="w-full rounded-md rounded-b-none  mx-auto" >
            <div class="bg-white rounded-md rounded-b-none py-2 px-3">
              <nav class="flex flex-wrap gap-4">
                <p  :class="showDesc ? 'text-purple-600 font-semibold border-b-purple-600' : ' hover:border-b-purple-600 hover:text-purple-600' "  @click="showDesc = true" class="inline-flex whitespace-nowrap border-b-2 border-transparent cursor-pointer py-2 px-3 text-sm  transition-all duration-200 ease-in-out "> Description </p>
          
                
          
                <p :class="!showDesc ? 'text-purple-600 font-semibold border-b-purple-600' : ' hover:border-b-purple-600 hover:text-purple-600' "  @click="showDesc = false" class="inline-flex whitespace-nowrap border-b-2 border-transparent  cursor-pointer py-2 px-3 text-sm  transition-all duration-200 ease-in-out"> fondement légal  </p>
              </nav>
            </div>
        </div>


        <div class="desc bg-white rounded-md px-10 py-4 rounded-t-none "  x-show="showDesc"> 

            
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">Your message</label>
            <textarea id="message" rows="4" class="block  resize-none p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 " placeholder="Write your thoughts here..."></textarea>

        </div>
          
        <div class="bg-white rounded-md rounded-t-none px-10 py-4  " x-show="!showDesc">
            
            <ul class=" leading-8  text-left px-4 py-2 mx-auto text-sm transition delay-75 mt-4 font-medium text-gray-900   ">
                <li class="w-full  rounded-t-lg ">
                    <div class="flex items-center pl-3">
                        <input wire:model="a71" id="chbx1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                        <label for="chbx1" class="w-full py-3 ml-2 pl-4 text-sm font-medium text-gray-900 ">Vous avez le consentement exprès de la
                            personne concernée?</label>
                    </div>
                </li>
                <li class="w-full  rounded-t-lg">
                    <div class="flex items-center pl-3">
                        <input wire:model="a72" id="chbx12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                        <label for="chbx12" class="w-full py-3 ml-2 pl-4 text-sm font-medium text-gray-900 ">La personne concernée peut, à tout moment, se rétracter?</label>
                    </div>
                    
                </li>
                <li class="w-full  rounded-t-lg ">
                    
                    <div class="flex items-center pl-3">
                        <input wire:model="a73" id="chbx13" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                        <label for="chbx13" class="w-full py-3 ml-2 pl-4 text-sm font-medium text-gray-900 ">Les données à caractère personnel objet du traitement ne
                            peuvent être communiquées à un tiers que pour la réalisation
                            de fins directement liées aux fonctions du responsable du
                            traitement et du destinataire et sous réserve du consentement
                            préalable de la personne concernée?</label>
                    </div>
                </li>

                <li class="w-full  rounded-t-lg ">
                    <div class="flex items-center pl-3">
                        <input wire:model="a74" id="chbx4" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500    focus:ring-2 ">
                        <label for="chbx4" class="leading-8  w-full py-3 pl-4 ml-2 text-sm font-medium text-gray-900 ">Le traitement des données à caractère personnel
                            qui concerne un enfant ne peut s'effectuer qu'après
                            l'obtention du consentement de son représentant légal ou, le
                            cas échéant, de l'autorisation du juge compétent?</label>
                    </div>
                </li>

                <li class="w-full rounded-t-lg ">
                    <div class="flex items-center pl-3">
                        <input wire:model='b71' id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                        <label for="vue-checkbox" class="leading-8 pl-4 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">Les données sont traitées de manière licite et loyale?</label>
                    </div>
                </li>
                <li class="w-full rounded-t-lg">
                    <div class="flex items-center pl-3">
                        <input wire:model='b72' id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2 ">
                        <label for="react-checkbox" class="leading-8 pl-4 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">Les données sont collectées pour des finalités déterminées, explicites et
                            légitimes, et ne peuvent être traitées ultérieurement de façon
                            incompatible avec lesdites finalités?</label>
                    </div>
                </li>
                <li class="w-full rounded-t-lg ">
                    <div class="flex items-center pl-3">
                        <input wire:model='b73' id="angular-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500    focus:ring-2 ">
                        <label for="angular-checkbox" class="leading-8 pl-4 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">Les données sont adéquates, pertinentes et non excessives au regard des
                            finalités pour lesquelles elles sont collectées ou traitées?</label>
                    </div>
                </li>
                


                
            </ul>
        </div>


        </main>
    </div>
</x-dash-layout>