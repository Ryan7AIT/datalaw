<div>
   
   {{-- <form wire:submit.prevent='e'> --}}
            
            <h2>Article 9</h2>

   
<h3 class="mb-4 font-semibold text-gray-900 "></h3>
<ul class="w-4/5 px-4 py-2 mx-auto text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg content-wrapper  show ">
    <li class="w-full border-b border-gray-200 rounded-t-lg ">
        <div class="flex items-center pl-3">
            <input wire:model='b71' id="vue-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600  focus:ring-2">
            <label for="vue-checkbox" class="leading-8 pl-4 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">Les données sont traitées de manière licite et loyale?</label>
        </div>
    </li>
    <li class="w-full border-b border-gray-200 rounded-t-lg">
        <div class="flex items-center pl-3">
            <input wire:model='b72' id="react-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500   focus:ring-2 ">
            <label for="react-checkbox" class="leading-8 pl-4 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">Les données sont collectées pour des finalités déterminées, explicites et
                légitimes, et ne peuvent être traitées ultérieurement de façon
                incompatible avec lesdites finalités?</label>
        </div>
    </li>
    <li class="w-full border-b border-gray-200 rounded-t-lg ">
        <div class="flex items-center pl-3">
            <input wire:model='b73' id="angular-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500    focus:ring-2 ">
            <label for="angular-checkbox" class="leading-8 pl-4 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">Les données sont adéquates, pertinentes et non excessives au regard des
                finalités pour lesquelles elles sont collectées ou traitées?</label>
        </div>
    </li>
    <li class="w-full rounded-t-lg ">
        <div class="flex items-center pl-3">
            <input wire:model='b74' id="laravel-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 0 focus:ring-2 ">
            <label for="laravel-checkbox" class="leading-8 pl-4 w-full py-3 ml-2 text-sm font-medium text-gray-900 ">Les données sont conservées sous une forme permettant lidentification
                des personnes concernées pendant une durée n excédant pas
                celle nécessaire à la réalisation des finalités pour lesquelles
                elles ont été collectées ou traitées?</label>
        </div>
    </li>
</ul>


<div class="flex flex-col justify-between sm:flex-row">
    <button type="button" wire:click="previous" class="group order-1 my-2 flex w-full items-center justify-center rounded-lg bg-gray-200 py-2 text-center font-bold text-gray-600 outline-none transition sm:w-40 focus:ring hover:bg-gray-300">Previous</button>
    
    
    <button   type="button" wire:click="saveResult" class="group my-2 flex w-full items-center justify-center rounded-lg bg-blue-700 py-2 text-center font-bold text-white outline-none transition sm:order-1 sm:w-40 focus:ring">
    Continue
    <svg xmlns="http://www.w3.org/2000/svg" class="group-hover:translate-x-2 ml-4 h-4 w-4 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
    </svg>
    </button>




</div>

{{-- <form wire.prevent.default> --}}

</div>
