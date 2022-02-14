@extends('layouts.app')

@section('content')
<div class="container">
    <h5>Ventas</h5><!-- Full screen modal -->
      <!-- div de mapeo -->
            <div class="row border-bottom" style="margin-bottom: 10px;">
                 <div class="col-3"><strong>Numero</strong></div>
                <div class="col-3"><strong>Correo</strong></div>
                <div class="col-6"><strong>Opciones</strong></div>
              
            </div>
             <div class="row  tr" style="margin-bottom: 10px;">
                 <div class="col-3 ">64384</div>
                <div class="col-3">hola@hola.com</div>
                <div class="col-3"><button class="btn btn-danger eliminar">Eliminar</button> </div>
                 <div class="col-3"><button class="btn btn-primary editar">Revisar</button></div>
              </div>
              <div class="row tr" style="margin-bottom: 10px;">
                 <div class="col-3 ">90879</div>
                <div class="col-3">hola@hola.com</div>
                <div class="col-3"><button class="btn btn-danger eliminar">Eliminar</button> </div>
                 <div class="col-3"><button class="btn btn-primary editar">Revisar</button></div>
              </div>
            
       
</div>
<!-- Modal delete -->
<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar categoría</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <input type="text" id="iddelete" name="iddelete" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">¿Eliminar?</label>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Continuar</button>
      </div></form>
    </div>
  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

 <script type="text/javascript">
    //cuando el documento este listo
    $(document).ready(function(){
        //activar la funcion cuando el botonn con el la clase edit se oprima
$('.editar').on('click', function(){
    //abrir el modal con el #id
$('#exampleModal2').modal('show');

$tr = $(this).closest("div.tr");
//lavariable data es igual a lo que se mapeo en el tr y th
var data = $tr.children("div").map(function(){
    //regresa a la variable como texto
     return $(this).text();
}).get();
//imprime en consola el arreglo recabado por el mapeo en variable data que ahora es un texto
console.log(data);
//en cada id del formulario aparece le asignamos lo que aparecera segun con os datos recabados en tr de la tabala
$('#idedit').val(data[0]);
$('#nombreedit').val(data[1]);

});

$('.eliminar').on('click', function(){
    //abrir el modal con el #id
$('#exampleModal3').modal('show');

$tr = $(this).closest("div.tr");
//lavariable data es igual a lo que se mapeo en el tr y th
var data = $tr.children("div").map(function(){
    //regresa a la variable como texto
     return $(this).text();
}).get();
//imprime en consola el arreglo recabado por el mapeo en variable data que ahora es un texto
console.log(data);
//en cada id del formulario aparece le asignamos lo que aparecera segun con os datos recabados en tr de la tabala
$('#iddelete').val(data[0]);
});
    });
</script>
@endsection
