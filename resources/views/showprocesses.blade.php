<x-dash-layout>

    <div class="">
      
    <div class="mx-auto mt-8 max-w-screen-lg px-2">
      <div class="sm:flex sm:items-center sm:justify-between flex-col sm:flex-row">
        <p class="flex-1 text-base font-bold text-gray-900">Liste des Traitments</p>
    
        {{-- <div class="mt-4 sm:mt-0">
          <div class="flex items-center justify-start sm:justify-end">
            <div class="flex items-center">
              <label for="" class="mr-2 flex-shrink-0 text-sm font-medium text-gray-900"> Sort by: </label>
              <select name="" class="sm: mr-4 block w-full whitespace-pre rounded-lg border p-1 pr-10 text-base outline-none focus:shadow sm:text-sm">
                <option class="whitespace-no-wrap text-sm">Recent</option>
              </select>
            </div>
    
            <button type="button" class="inline-flex cursor-pointer items-center rounded-lg border border-gray-400 bg-white py-2 px-3 text-center text-sm font-medium text-gray-800 shadow hover:bg-gray-100 focus:shadow">
              <svg class="mr-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" class=""></path>
              </svg>
              Export to CSV
            </button>
          </div>
        </div> --}}
      </div>
    
      <div class="mt-6  bg-white rounded-xl border shadow">
        <table class="w-full border-separate border-spacing-y-2 border-spacing-x-2">
          <thead class=" border-b lg:table-header-group">
            <tr class="">
              <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Nom</td>
    
              <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Date de creation</td>
    
              <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Type</td>
    
              <td class="whitespace-normal py-4 text-sm font-medium text-gray-500 sm:px-6">Status</td>

              <td class="">

              </td>
            </tr>
          </thead>
    
          <tbody class="lg:border-gray-300">
            <tr class="">
              <td  class="whitespace-no-wrap py-4 text-sm font-bold  text-gray-900 sm:px-6">
                Standard Plan - Feb 2022
                
              </td>
    
              <td class="whitespace-no-wrap  py-4 text-sm font-normal  text-gray-500 sm:px-6 lg:table-cell">07 February, 2022</td>
    
              <td class="whitespace-no-wrap   py-4  px-6 text-sm text-gray-600 lg:text-left">
                Manuel
              </td>
    
              <td class="whitespace-no-wrap  py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell">
                <div class="inline-flex items-center rounded-full bg-blue-600 py-2 px-3 text-xs text-white">Vaild</div>
              </td>

              <td class="flex space-x-2 whitespace-no-wrap  py-4 text-sm font-normal text-gray-500 sm:px-6 lg:table-cell ">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg>

                  <svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg>
                  
                  

              </td>
            </tr>
    
          
          </tbody>
        </table>
      </div>
    </div>
    
    </div>
</x-dash-layout>