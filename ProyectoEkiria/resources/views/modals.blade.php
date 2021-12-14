<!---CREAR PROVEEDOR-->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="agregar_prov" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ageLabel">Crear proveedor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <form action="" class="form-p">
            <label for="nombre" >Nombre</label>
            <br>
             <input type="text" name="nombre" id="nombre" placeholder="Nombre"class="form-control">
              <br>
             <label for="Tel" >Télefono</label>
             <br>
              <input type="tel" name="Telefono" id="Tel" placeholder="Télefono" class="form-control">
              <br>
              <label for="email" >E-mail</label>
              <br>
               <input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
                <br>
               <label for="encargo" >Encargo</label>
               <br>
                <input type="text" name="Encargo" id="encargo" placeholder="Encargo" class="form-control">
                <br>
                <label for="descrip" >Descripción</label>
                <br>
                <textarea class="form-control" id="descrip" rows="3"></textarea>
             </form>    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
        </div>
      </div>
    </div>
  </div>


  <!---BORRAR PROVEEDOR-->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="borrar_prov" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ageLabel">Borrar proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Si quiere borrar al proveedor dale al botón confirmar 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
      </div>
    </div>
  </div>
</div>

<!--EDITAR PROVEEDOR--->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="editar_prov" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ageLabel">Editar proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" class="form-p">
          <label for="nombre" >Nombre</label>
          <br>
           <input type="text" name="nombre" id="nombre" placeholder="Nombre"class="form-control">
            <br>
           <label for="Tel" >Télefono</label>
           <br>
            <input type="tel" name="Telefono" id="Tel" placeholder="Télefono" class="form-control">
            <br>
            <label for="email" >E-mail</label>
            <br>
             <input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
              <br>
             <label for="encargo" >Encargo</label>
             <br>
              <input type="text" name="Encargo" id="encargo" placeholder="Encargo" class="form-control">
              <br>
              <label for="descrip" >Descripción</label>
              <br>
              <textarea class="form-control" id="descrip" rows="3"></textarea>
           </form>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
      </div>
    </div>
  </div>
</div>




<!---CREAR PRODUCTOS-->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="agregar_prod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ageLabel">Crear producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" class="form-p">
          <label for="prov" >Proveedor</label>
          <br>
          <div class="contend">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar_prov" style="margin: 5px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
              </button>
           <select name="prov" id="proveedor" class="form-control" style="width: 90%;">
             <option value="">jose</option>
             <option value="">pablo</option>
             <option value="">cesar</option>
           </select>
          </div>
            <br>
            <label for="prov" >Tipo de producto</label>
            <select name="prov" id="proveedor" class="form-control" >
              <option value="">Barniz</option>
              <option value="">lima</option>
              <option value="">corta uñas</option>
            </select>
            <br>
            <label for="prod" >Producto</label>
            <br>
             <input type="text" name="Prod" id="prod" placeholder="producto" class="form-control">
              <br>
             <label for="pre" >precio</label>
             <br>
              <input type="text" name="prec" id="pre" placeholder="Precio" class="form-control">
              <br>
              <label for="descrip" >Descripción</label>
              <br>
              <textarea class="form-control" id="descrip" rows="3"></textarea>
           </form>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
      </div>
    </div>
  </div>
</div>


<!---BORRAR PRODUCTOS-->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="borrar_prod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="ageLabel">Borrar producto</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     Si quiere borrar un producto dale al botón confirmar 
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
    </div>
  </div>
</div>
</div>

<!--EDITAR PRODUCTOS--->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="editar_prod" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="ageLabel">Editar producto</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     <form action="" class="form-p">
        <label for="nombre" >Nombre</label>
        <br>
         <input type="text" name="nombre" id="nombre" placeholder="Nombre"class="form-control">
          <br>
         <label for="Tel" >Télefono</label>
         <br>
          <input type="tel" name="Telefono" id="Tel" placeholder="Télefono" class="form-control">
          <br>
          <label for="email" >E-mail</label>
          <br>
           <input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
            <br>
           <label for="encargo" >Encargo</label>
           <br>
            <input type="text" name="Encargo" id="encargo" placeholder="Encargo" class="form-control">
            <br>
            <label for="descrip" >Descripción</label>
            <br>
            <textarea class="form-control" id="descrip" rows="3"></textarea>
         </form>    
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
    </div>
  </div>
</div>
</div>


<!---CREAR COMPRA-->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="agregar_compra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ageLabel">Crear compra</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" class="form-p">
          <label for="encar" >Encargo</label>
          <br>
          <input type="text" name="encar" id="encar" placeholder="Encargo" class="form-control">
            <br>
            <div class="input-group">
              <div class="form-outline">
                <input type="search" id="form1" class="form-control">
              
              </div>
              <button type="button" class="btn btn-primary">
                <i class="fas fa-search"></i>
              </button>
            </div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar_prod" style="margin-left: 94%;" >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
              </button>
            <div class="cont-tabl">
            <table class="table table-striped">
              <thead class="table-dark">
                <tr>
                  <th scope="col">Proveedor</th>
                  <th scope="col">Tipo producto</th>
                  <th scope="col">Precio</th>
                  <th scope="col">Descripción</th>
                  <th scope="col">Cantidad</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Estado</th>
                  <th scope="col">Borrar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Jose</td>
                  <td>Barniz</td>
                  <td>$8600</td>
                  <td>color rojo</td>
                  <td>5</td>
                </td>
                <td><img  src="/static/Modulo_compras/img/barniz.jpg" alt=""></td>
                <td><div class="form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                  <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                </div>
                <td><img type="button" id="b" data-bs-toggle="modal" data-bs-target="#borrar_prod"src="/static/Modulo_compras/img/borrar.png" title="Borrar proveeedor" style="width: 100%;"></td>
                </tr>
              
                   </tbody>
              </table>
            </div>
            <br>
            <label for="prod">Total</label>
            <br>
             <input type="text" name="Prod" id="prod" placeholder="producto" class="form-control">
              <br>
              <label for="descrip" >Descripción</label>
              <br>
              <textarea class="form-control" id="descrip" rows="3"></textarea>
           </form>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
      </div>
    </div>
  </div>
</div>


<!---BORRAR COMPRA-->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="borrar_compra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="ageLabel">Borrar compra</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     Si quiere borrar una compra dale al botón confirmar 
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
    </div>
  </div>
</div>
</div>

<!--EDITAR COMPRA--->
<div class="modal fade"  class="modal-dialog modal-dialog-scrollable" id="editar_compra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="ageLabel">Editar compra</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
     <form action="" class="form-p">
        <label for="nombre" >Encargo</label>
        <br>
         <input type="text" name="nombre" id="nombre" placeholder="Nombre"class="form-control">
          <br>
            <label for="descrip" >Descripción</label>
            <br>
            <textarea class="form-control" id="descrip" rows="3"></textarea>
         </form>    
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Confirmar</button>
    </div>
  </div>
</div>
</div>