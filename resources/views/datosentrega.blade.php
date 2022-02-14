@extends('layouts.myapp')

@section('content')
<div class="container">
  <br>
  Datos de entrega | Forma de pago | Revisar orden
 <div class="progress" >
  <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<h5>Datos de entrega</h5>
<br>
<h5>Información del cliente y domicilio de entrega</h5>
<form class="row g-3 needs-validation" novalidate action="{{route('fpago')}}" method="GET">
  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01"required>
    <div class="invalid-feedback">
      Campo requerido
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="validationCustom02"  required>
     <div class="invalid-feedback">
      Campo requerido
    </div>
  </div> 
   <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Telefono</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Introduce un numero de telefono
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustomUsername" class="form-label">Correo electrónico</label>
    <div class="input-group has-validation">
     
      <input type="email" class="form-control" id="validationCustom04" placeholder="name@example.com"
     required>
      <div class="invalid-feedback">
       Introduce un correo electrónico
      </div>
    </div>
  </div> 

  <div class="col-md-3">
    <label for="validationCustom01" class="form-label">Calle</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Campo requerido
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom02" class="form-label">Numero exterior</label>
    <input type="number" class="form-control" id="validationCustom06" required>
     <div class="invalid-feedback">
      Campo requerido
    </div>
  </div> 
   <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Numero interior</label>
    <input type="text" class="form-control" id="validationCustom07" required>
     <div class="invalid-feedback">
      Campo requerido
    </div>
  </div> 
  <div class="col-md-3">
    <label for="validationCustom03" class="form-label">Código postal</label>
    <input type="text" class="form-control" id="validationCustom08" required>
  <div class="invalid-feedback">
      Campo requerido
    </div>
  </div> 
   <div class="col-md-4" style="margin-top: 10px;">
   <label for="validationCustom01" class="form-label">Colonia </label>
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="validationCustom09" required>
  <option value="">Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
<div class="invalid-feedback">
      Campo requerido
    </div>
</div>
 <div class="col-md-4"  style="margin-top: 10px;">
   <label for="validationCustom01" class="form-label">Estado </label>
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="validationCustom10" required>
  <option value="">Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select><div class="invalid-feedback">
      Campo requerido
    </div>
</div>
 <div class="col-md-4"  style="margin-top: 10px;">
   <label for="validationCustom01" class="form-label">Ciudad o municipio </label>
  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="validationCustom11" required>
  <option value="">Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select><div class="invalid-feedback">
      Campo requerido
    </div>
</div>
 <div class="col-md-6">
    <label for="validationCustom01" class="form-label">Entre que calles está el domicilio</label>
    <input type="text" class="form-control" id="validationCustom12"  required>
    <div class="invalid-feedback">
      Campo requerido
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom02" class="form-label">Referencias ¿Que se encuentra cerca?</label>
    <input type="text" class="form-control" id="validationCustom13"  required>
 <div class="invalid-feedback">
      Campo requerido
    </div>
  </div> 
  <div class="col-12" style="margin-top: 20px; margin-bottom: 10px;">
    <button class="btn btn-primary" type="submit" style="width: 100%">Continuar</button>
  </div>

</form>
 <div class="col-12" style="margin-top: 10px; margin-bottom: 10px;">
   <a href="{{route('carrito')}}" style="width: 100%" class="btn"> Ir al carrito</a>
  </div>
  <br>
  <h5>Resumen de compra</h5><br>
  <div class="card">
  <div class="card-header">
    Resumen de compra
  </div>
  <div class="card-body">
    <h5 class="card-title">Sub total: $9895</h5>
    <p class="card-text">Envio: $50</p><strong>
   <p class="card-text">Total de contado: $10000</p><br></strong>
   <p style="background-color: grey;">*La fecha de entrega puede cambiar por la disponibilidad del producto, tu ubicación o la forma de pago.</p>
   <strong>Entrega a domicilio</strong>
  <strong style="color:green;">Llega entre el 22 y el 27 de julio*</strong> 
  </div>
</div>
   <!--  Cards -->
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
 <!--  Yo agrego mas  -->
 <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
  // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
@endsection
