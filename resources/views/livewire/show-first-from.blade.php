<div class="mt-">
   {{-- <form wire:submit.prevent> --}}

   
            
            <h2>Article 7</h2>

            <div class="flex items-center">
                <input wire:model="isChecked" id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2 ">
                <label for="link-checkbox" class="ml-2 text-base   font-medium text-gray-900 ">vos données incluent-elles à caractère personnel?</label>
            </div>


            @if ($isChecked)


        <ul class="w-4/5 leading-8  text-left px-4 py-2 mx-auto text-sm transition delay-75 mt-4 font-medium text-gray-900 bg-white border border-gray-200 rounded-lg  content-wrapper @if ($isChecked) show @endif">
            <li class="w-full border-b border-gray-200 rounded-t-lg ">
                <div class="flex items-center pl-3">
                    <input wire:model="a71" id="chbx1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                    <label for="chbx1" class="w-full py-3 ml-2 pl-4 text-sm font-medium text-gray-900 ">Vous avez le consentement exprès de la
                        personne concernée?</label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg">
                <div class="flex items-center pl-3">
                    <input wire:model="a72" id="chbx12" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                    <label for="chbx12" class="w-full py-3 ml-2 pl-4 text-sm font-medium text-gray-900 ">La personne concernée peut, à tout moment, se rétracter?</label>
                </div>
                
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg ">
                
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
            
        </ul>

        @endif


        <div class="flex flex-col justify-end  sm:flex-row">
            
            
            <button type="button" wire:click="saveResult" class="group my-2 flex w-full items-center justify-center rounded-lg bg-blue-700 py-2 text-center font-bold text-white outline-none transition sm:order-1 sm:w-40 focus:ring">
            Continue
            <svg class="group-hover:translate-x-2 ml-4 h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
            </button>

            


        </div>
    {{-- </form> --}}

</div>
