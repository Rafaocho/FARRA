@extends('master')

@section('content')
<div class="container col-6 mt-5 card shadow-lg p-5">
    <h2 class="text-center mb-4">Pagar evento: {{ $event->title }}</h2>

    <form id="payment-form" action="{{ route('event.processPayment', $event->id) }}" method="POST">
        @csrf

        <div id="payment-fields">
            <div class="mb-3">
                <label class="form-label">Número de tarjeta</label>
                <input type="text" class="form-control" id="tarjeta" placeholder="1234 5678 9012 3456" required>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label class="form-label">Expiración</label>
                    <input type="string" class="form-control" id="fechaExp" placeholder="MM/AA" required>
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label">CVC</label>
                    <input type="text" class="form-control" id="CVC" placeholder="123" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Titular</label>
                <input type="text" class="form-control" id="titular" placeholder="Juan Pérez" required>
            </div>
            <div class="text-end">
                <button type="submit" class="btn btn-success">Pagar €{{ $event->price }}</button>
            </div>
        </div>

        <div id="payment-loading" class="text-center d-none">
            <div class="spinner-border text-success my-4" role="status">
                <span class="visually-hidden">Procesando...</span>
            </div>
            <p class="text-muted">Procesando pago, por favor espera...</p>
        </div>
    </form>
</div>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const formulario = document.getElementById("payment-form");

    const numeroTarjeta = document.getElementById("tarjeta");
    const expiracion = document.getElementById("fechaExp");
    const cvc = document.getElementById("CVC");
    const titular = document.getElementById("titular");
    const boton = formulario.querySelector("button[type='submit']");

    const expRegNumero = /^\d{4} ?\d{4} ?\d{4} ?\d{4}$/;
    const expRegExpiracion = /^(0[1-9]|1[0-2])\/\d{2}$/;
    const expRegCVC = /^\d{3,4}$/;
    const expRegTitular = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{3,}$/;

    boton.addEventListener("click", (e) => {
        e.preventDefault();

        let valido = true;

        if (!expRegNumero.test(numeroTarjeta.value.trim())) {
            numeroTarjeta.style.backgroundColor = "pink";
            numeroTarjeta.style.border = "2px solid red";
            valido = false;
        } else {
            numeroTarjeta.style.backgroundColor = "white";
            numeroTarjeta.style.border = "";
        }

        if (!expRegExpiracion.test(expiracion.value.trim())) {
            expiracion.style.backgroundColor = "pink";
            expiracion.style.border = "2px solid red";
            valido = false;
        } else {
            expiracion.style.backgroundColor = "white";
            expiracion.style.border = "";
        }

        if (!expRegCVC.test(cvc.value.trim())) {
            cvc.style.backgroundColor = "pink";
            cvc.style.border = "2px solid red";
            valido = false;
        } else {
            cvc.style.backgroundColor = "white";
            cvc.style.border = "";
        }

        if (!expRegTitular.test(titular.value.trim())) {
            titular.style.backgroundColor = "pink";
            titular.style.border = "2px solid red";
            valido = false;
        } else {
            titular.style.backgroundColor = "white";
            titular.style.border = "";
        }

        if (valido) {
            document.getElementById('payment-fields').classList.add('d-none');
            document.getElementById('payment-loading').classList.remove('d-none');
            formulario.submit();
        }
    });
});
</script>

@endsection
