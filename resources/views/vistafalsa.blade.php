

                  
                                                                        <!--COORDINADORES-->
          <label for="coordinadores" class="mt-5 mb-3">Coordinador(es)</label>
          <div class="col-12 d-flex justify-content-between">
            <button  type="button" value="1" name="formselector" onClick="displayForm3(this)" class="btn btn-primary col-5">BUSCAR</button>
            <button value="2" type="button" name="formselector" onClick="displayForm3(this)"  class="btn btn-primary col-5">REGISTRAR</button>
          </div>
        
          <div style="display:block" id="requestForm3">
            
            
            <div id="padre5" class="clasePadre5">
            <select name="" id="selectAutor" class="form-select mt-4">
                @foreach ($autores as $autor)
                  <option value="{{$autor->id}}">{{$autor->nombre}} {{$autor->primerApellido}} {{$autor->segundoApellido}}</option>
                @endforeach
            </select>
            </div>

            <!--  
            <div class="col-12 d-flex justify-content-end mt-3">
              <button class="btn btn-danger" id="btnEliminarAutores" >-</button>
              <button class="btn btn-success" id="btnAgregarAutores" >+</button>
            </div>
            -->
            
          </div>

          <div style="display:none" id="memberForm3" class="mt-4">
                    
                <input type="text" placeholder="Nombre" class="form-control mt-3" id="primerNombre">
                <input type="text" placeholder="Segundo nombre (opcional)" class="form-control mt-3" id="segundoNombre">
                <input type="text" placeholder="Primer apellido" class="form-control mt-3" id="primerApellido">
                <input type="text" placeholder="Segundo apellido" class="form-control mt-3" id="segundoApellido">
                <div class="col-12 d-flex justify-content-center">
                    <button  type="button" value="true" name="formselector" onClick="" class="btn btn-warning col-6 mt-3" id="btnRegistrarAutor">Registrar Coordinador</button>
                </div>

          </div>
          



                                                                                      <!--UBICACION AND COSTO-->
          <div class="col-12 d-flex">

            <div class="col-6">
              <label for="editorial" class="mt-4 mb-2">Ubicacion en bodega</label>
              <div id="padre6" class="clasePadre6">
                <input type="text" class="form-control">
              </div>             
            </div>  

            <div class="col-6">
              <label for="editorial" class="mt-4 mb-2">Costo</label>
              <input type="number" class="form-control">
            </div>

          </div>



          <div class="col-12 mt-4">
            <label for="observaciones" class="mb-3">Observaciones</label>
            <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
          </div>



           <div class="col-12">
              <button class="btn btn-danger col-12 mt-4 mb-5" style="resize:none;">REGISTRAR LIBRO</button>
           </div> 

