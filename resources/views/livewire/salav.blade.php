<div class="card">
  <div class="container">
    <br>
      <div class="row ">
        <h4>Sala:</h4>
        <div class="col-1"></div>
        <div class="col-3">
             
        <select class="form-control float-center" wire:model="sala">
              <option value="">Seleccione una sala</option>
              @foreach ($salas as $sala)
                  <option value="{{ $sala->id }}"> {{ $sala->id }} </option>
              @endforeach
        </select>
        </div>
       

        <div class="col-3">
        <select class="form-control" >
              <option value="">Seleccione un horario</option>
             
        </select>
        </div>


        <div class="col-3">
        <select class="form-control" >
              <option value="">Pelicula</option>
             
        </select>
        </div>

        <div class="col-1"></div>
      </div>

    <br>
      
      <h4> Butacas:</h4>
      <div class="float-right">
         <div class="table">
            <br>
          <tr>
            
                <td>  <img width="30" src="/storage/image/butaca.png" > Butaca</td> 
                <td> - </td>
                <td><img width="30" class="text-center" src="/storage/image/butaca seleccionada.png" > Disponible</td>
                <td> - </td>
                <td><img width="30" src="/storage/image/butaca ocupado.png" > No disponible</td>
                
          </tr>
          
      </div>
      </div>
     

      
      <div class=""> 

          <div class="row" wire:model="butaca">    
                @if ($butacas->count() == 0)
                          <div value="0" class="text text-dark text-center">
                            <br>
                            <img width="80" src="/storage/image/butaca.png" >
                          </div>
                          <div value="0" class="text text-dark text-center">
                            <br>
                            <img width="80" src="/storage/image/butaca.png" >
                          </div>
                          <div value="0" class="text text-dark text-center">
                            <br>
                            <img width="80" src="/storage/image/butaca.png" >
                          </div>
                          <div value="0" class="text text-dark text-center">
                            <br>
                            <img width="80" src="/storage/image/butaca.png" >
                          </div>
                          <div value="0" class="text text-dark text-center">
                            <br>
                            <img width="80" src="/storage/image/butaca.png" >
                          </div>
                          <div value="0" class="text text-dark text-center">
                            <br>
                            <img width="80" src="/storage/image/butaca.png" >
                          </div>
                @endif

                @foreach ($butacas as $butaca) 
              
                    <div value="{{ $butaca->id }}">      
                      
                            @if ($butaca->disponible < 2 )  
                            <br>
                                <div class="text text-dark text-center">
                                    <img width="80" class="text-center" src="/storage/image/butaca seleccionada.png" > <br>  {{ $butaca->nombre }} 
                                </div>
                          <br>
                            @else
                            <br>
                                <div class="text text-dark text-center">
                                    <img width="80" src="/storage/image/butaca ocupado.png" > <br>  {{ $butaca->nombre }}
                                </div>
                            <br>
                            @endif
                    </div>
                @endforeach
          </div>

        </div>
  </div>
     
</div>
