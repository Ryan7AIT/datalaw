<div>
    <section class=" shadow-blue-100 mx-auto max-w-screen-lg rounded-xl bg-white text-gray-600 shadow-lg sm:my-10 sm:border">
        <div class="mx-auto w-full py-2 sm:max-w-screen-sm md:max-w-screen-md md:py-12 lg:py-12">
          <div class="flex items-center">
            <div class="w-full">
              <div class="flex justify-center md:pb-8 lg:pb-8">
                <div class="md:w-5/6 w-full text-center lg:w-5/6">
                  <h3 class="text-3xl font-bold leading-9 md:text-4xl md:leading-10 lg:text-4xl lg:leading-10 font-serif">Test Reuslt

                    

                  </h3>

                  <div class="svg w-16 m-auto text-center pb-4 pt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8   text-blue-500">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-.189m-1.5.189a6.01 6.01 0 01-1.5-.189m3.75 7.478a12.06 12.06 0 01-4.5 0m3.75 2.383a14.406 14.406 0 01-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 10-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                    </svg>
                  </div>
                  
                  <p class="  mb-4 font-sans text-base font-light leading-7 text-gray-500 md:text-xl md:leading-7 lg:text-xl lg:leading-7">

                    
                    
                    votre processus respectez la loi en : 
                    {{$score}} %
                  </p>
                </div>
              </div>
              <div class="flex flex-wrap items-start justify-center px-2">

                @foreach ($problems as $problem)
                    
                  <div class="w-full divide-y divide-gray-300">
                      <div>
                          <div x-data = "{open:false}"
                              
                              class="block w-full cursor-pointer py-4 font-sans duration-300 ease-in-out hover:bg-purple-50 md:py-6 lg:py-6" data-blok-c="undefined" data-blok-uid="undefined"
                                  ><div class="flex flex-wrap items-center justify-between px-0 md:px-4 lg:px-4">
                                  <div class="md:w-1/4 mr-0 w-5/6 pl-4 md:mr-4 md:pl-0 lg:mr-4 lg:w-1/4 lg:pl-0">
                                      <h3 class="text-xl font-serif leading-7 flex justify-start space-x-2">
                                        
                                        
                                        

                                      @if(empty($problem) || empty(trim($problem)))

                                        <svg  fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-green-500 pt-1">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                      
                                        <p>{{$articles[$loop->iteration -1]}}</p>
                                      @else
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 pt-1 text-red-500">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                          </svg>
                                          
                                        <p>{{$articles[$loop->iteration -1]}}</p>  
                                      @endif
                                        
                                      </h3>
                                  </div>
                                  <div class="md:w-1/2 w-5/6 pl-4 md:pl-0 lg:w-1/2 lg:pl-0">
                                      <span class="text-base font-light text-gray-500 md:text-base md:leading-6 lg:text-base lg:leading-6 xl:text-base xl:leading-6">
                                        
                                        @if(empty($problem) || empty(trim($problem)))
                                            <p>aucun problème</p>
                                        @else
                                            <p>{{ $problem }}</p> 
                                        @endif


                                        </span>
                                  </div>
                                  <div class="md:w-1/12 w-1/12 text-right lg:w-1/12">
                                      <div class="inline-flex h-8 w-8 items-center justify-center rounded-full border border-solid border-current font-normal text-blue-600 duration-150 ease-in-out">
                                      <!-- hero:chevron-right -->
                                      <svg @click="open = !open"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="block h-5 w-5">
                                          <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" class=" "></path>
                                      </svg>
                                      </div>
                                  </div></div>

                                  @if(empty($problem) || empty(trim($problem)))

                                  @else

                                    <div x-show="open" class="whattodo pl-6">
                                      <h2 class="pl-10 font-semibold pt-2">Solution:</h2>
                                      <ul class="solotuions m-4 pl-10 font-medium text-gray-500">
                                        @foreach ($solutions[$loop->iteration -1 ] as $sol)
                                            
                                            
                                            <li class="list-disc">{{$sol}}</li>
                                          
                                        @endforeach
                                      </ul>
                                    </div>

                                    @endif

                              </div>

                      </div>
                    
                  </div>

                @endforeach

                <div wire:click='another' class="group flex w-full cursor-pointer items-center justify-center rounded-md bg-indigo-700 px-6 py-2 text-white transition">
                  <span class="group flex w-full items-center justify-center rounded py-1 text-center font-bold"> Faire un autre test </span>
                  <svg class="flex-0 ml-4 h-6 w-6 transition-all group-hover:ml-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
        </div>


         
      </section>
      
</div>
