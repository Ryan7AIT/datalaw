<div>
   
            
            <h2>Article 18</h2>

    <div class="flex items-center">
        <input wire:model="isChecked" id="link-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2 ">
        <label for="link-checkbox" class="ml-2 text-sm font-medium text-gray-900 ">Est ce que vous traiter des données
            sensibles?</label>
    </div>


    @if ($isChecked)
        <h3 class="mb-4 font-semibold text-gray-900 "></h3>
        <ul class="w-4/5 m-auto px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg content-wrapper @if ($isChecked) show @endif">
            <li class="w-full border-b border-gray-200 rounded-t-lg ">
                <div class="flex items-center pl-3">
                    <input wire:model='d71' id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
                    <label for="vue-checkbox" class="w-full pl-4 leading-8 py-3 ml-2 text-sm font-medium text-gray-900 ">
                        le traitement est nécessaire à la défense dintérêts vitaux
                        de la personne concernée ou dune autre personne et si la
                        personne concernée se trouve dans lincapacité physique ou
                        juridique de donner son consentement 
                    </label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg">
                <div class="flex items-center pl-3">
                    <input wire:model='d72' id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2 ">
                    <label for="react-checkbox" class="w-full pl-4 leading-8 py-3 ml-2 text-sm font-medium text-gray-900 ">
                        le traitement porte sur des données manifestement
                        rendues publiques par la personne concernée, dès lors que
                        son consentement au traitement des données peut être déduit
                        de ses déclarations
                    </label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg ">
                <div class="flex items-center pl-3">
                    <input wire:model='d73' id="angular-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500    focus:ring-2 ">
                    <label for="angular-checkbox" class="pl-4 leading-8 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">
                        le traitement est nécessaire à la reconnaissance,
                        lexercice ou la défense d un droit en justice et est effectué
                        exclusivement à cette fin 
                    </label>
                </div>
            </li>
            <li class="w-full border-b border-gray-200 rounded-t-lg ">
                <div class="flex items-center pl-3">
                    <input wire:model='d74' id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 0 focus:ring-2 ">
                    <label for="laravel-checkbox" class="w-full pl-4 leading-8 py-3 ml-2 text-sm font-medium text-gray-900 ">
                        le traitement de données génétiques à l exclusion de
                        celles effectuées par des médecins ou biologistes et qui sont
                        nécessaires pour l exercice de la médecine préventive
                    </label>
                </div>
            </li>
        </ul>

    @endif

    <div class="flex flex-col justify-between sm:flex-row">
        <button type="button" wire:click="previous" class="group order-1 my-2 flex w-full items-center justify-center rounded-lg bg-gray-200 py-2 text-center font-bold text-gray-600 outline-none transition sm:w-40 focus:ring hover:bg-gray-300">Previous</button>
        
        
        <button  type="button" wire:click="saveResult" class="group my-2 flex w-full items-center justify-center rounded-lg bg-blue-700 py-2 text-center font-bold text-white outline-none transition sm:order-1 sm:w-40 focus:ring">
        Voir Resulat
        <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:translate-x-2 ml-4 h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
        </svg>
        </button>




    </div>

</div>
