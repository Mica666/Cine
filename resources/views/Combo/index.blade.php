<x-app-layout >
    @livewire('carrousel')
 <div class=" mx-auto max-w-7xl px-2 sm:px-6 lg:px-8 py-6 bg-orange-100">
  
    <div class="grid grid-cols-9 gap-4  m">
        
         @foreach ($combos as $combo)
            <div class=" col-span-6 p-3  shadow-lg">  

                <img class="float-left object-scale-down h-60 w-40" src="{{Storage::url($combo->image->url)}}"> 
                
                <p class="ml-3">        
               
                    <div class="text-lg text-red-900 leading-8 font-bold">  {{$combo->nombre}} </div>
                    
                    <div> <a class="leading-2 font-bold ">Descripcion: </a> {{$combo->descripcion}}</div> 

                    <div>  <a class="leading-2 font-bold "> Precio: </a> {{$combo->precio}} </div>

                  </p>
                        
                   

                @endforeach 
            </div>

            <div class=" col-span-3 shadow-lg">

            </div>
     
        </div>

    </div>
        

</x-app-layout>