<section class="shadow-blue-100 mx-auto max-w-screen-lg rounded-xl bg-white text-gray-600 shadow-lg sm:my-10 sm:border">
    
    <div class="container mx-auto flex flex-col flex-wrap px-5 pb-12">
        <div class="bg-slate-50 mx-auto mt-4 mb-4 flex w-full flex-wrap items-center space-x-4 py-4 md:mb-6 md:justify-center md:px-10">
        <span class="hidden h-8 w-8 items-center justify-center rounded-full {{$currentStep >= 1?  'bg-teal-500 text-white' : ''}}  shadow md:inline-flex">1</span>
        <span class="hidden md:inline {{$currentStep >= 1 ? 'text-teal-500 ' : ''}} ">Etape 1</span>
        <span class="{{$currentStep >= 2 ? 'bg-teal-400 h-0.5'  : 'hidden h-0 w-10 border-t-2 border-dashed border-gray-400'}}   w-10 md:inline"></span>
        <span class="{{$currentStep >= 2 ? 'bg-blue-600 text-white' : 'bg-white text-blue-700 '}} hidden h-8 w-8 items-center justify-center rounded-full shadow md:inline-flex">2</span>
        <span class="{{$currentStep >= 2 ? 'text-blue-600 bg-white' : 'text-gray-600 '}} hidden md:inline">Etape 2</span>

        <span class="{{$currentStep >= 3 ? 'text-blue-600 bg-white' : ''}} hidden h-0 w-10 border-t-2 border-dashed border-gray-400 md:inline"></span>
        <span class="{{$currentStep >= 3 ? 'bg-red-600 text-white' : ''}} hidden h-8 w-8 items-center justify-center rounded-full  text-blue-700 shadow md:inline-flex">3</span>
        <span class="{{$currentStep >= 3 ? 'text-red-600 bg-white' : 'text-gray-600'}} hidden  md:inline">Etape 3</span>
        <span class="{{$currentStep >= 4 ? 'text-blue-600 bg-white' : ''}} hidden h-0 w-10 border-t-2 border-dashed border-gray-400 md:inline"></span>
        <span class="{{$currentStep >= 4 ? 'bg-yellow-600 text-white' : ''}} hidden h-8 w-8 items-center justify-center rounded-full  text-blue-700 shadow md:inline-flex">4</span>
        <span class="{{$currentStep >= 4 ? 'text-yellow-600 bg-white' : 'text-gray-600'}} hidden md:inline">Etape 4</span>
        <span class="{{$currentStep >= 4 ? 'text-blue-600 bg-white' : ''}} text-xl md:hidden"
            ><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-3 w-3">
            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </span>
        </div>

        <div class="flex w-full flex-col text-center">
        <p class="mb-10 font-medium text-xl">Veuillez répondre à ces questions pour savoir si votre processus respecte la loi ou non, cochez la case si votre réponse est oui, sinon laissez-la vide.</p>
        @if($currentStep == 1)

        <livewire:show-first-from wire:ket='form-1'>
        @endif
        @if($currentStep == 2)
        <livewire:show-second-from wire:ket='form-2'>
        @endif
        @if($currentStep == 3)
        <livewire:show-third-from wire:ket='form-3'>
        @endif
        @if($currentStep == 4)
        <livewire:show-fourth-from wire:ket='form-4'>
        @endif

        
        </div>
    </div>
</section>
