@extends('master')
<!--Vista con terminal de pago y validaciones en los inputs por javascript-->
@section('content')
<div class="container col-7 mt-5 card shadow-lg p-5">
    <h2 class="text-center mb-4" style="color: rgb(11, 64, 161);">
        {{ __('messages.payEvent') }}: {{ $event->title }}
    </h2>

    <form id="payment-form" action="{{ route('event.processPayment', $event->id) }}" method="POST">
        @csrf

        <div id="payment-fields">
            <div class="mb-3">
                <label class="form-label">{{ __('messages.creditCard') }}</label>
                <input type="text" class="form-control" id="tarjeta" placeholder="1234 5678 9012 3456" required>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label class="form-label">{{ __('messages.expirationDate') }}</label>
                    <input type="text" class="form-control" id="fechaExp" placeholder="MM/AA" required>
                </div>
                <div class="col-6 mb-3">
                    <label class="form-label">CVC</label>
                    <input type="text" class="form-control" id="CVC" placeholder="123" required>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">{{ __('messages.titular') }}</label>
                <input type="text" class="form-control" id="titular" placeholder="Juan Pérez" required>
            </div>
            <div class="text-end">
                <button type="submit" class="btn fw-bold" 
                    style="background-color: rgb(11, 64, 161); color: white; border: none;">
                    {{ __('messages.pay') }} €{{ $event->price }}
                </button>
            </div>
        </div>

        <div id="payment-loading" class="text-center d-none">
            <div class="spinner-border text-primary my-4" role="status">
                <span class="visually-hidden">{{ __('messages.processing') }}</span>
            </div>
            <p class="text-muted">{{ __('messages.processingText') }}</p>
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

    const limpiarEstilo = (input) => {
        input.style.backgroundColor = "white";
        input.style.border = "";
    };

    const marcarError = (input) => {
        input.style.backgroundColor = "#ffe6e6";
        input.style.border = "2px solid #e63946";
    };

    boton.addEventListener("click", (e) => {
        e.preventDefault();

        let valido = true;

        if (!expRegNumero.test(numeroTarjeta.value.trim())) {
            marcarError(numeroTarjeta);
            valido = false;
        } else limpiarEstilo(numeroTarjeta);

        if (!expRegExpiracion.test(expiracion.value.trim())) {
            marcarError(expiracion);
            valido = false;
        } else limpiarEstilo(expiracion);

        if (!expRegCVC.test(cvc.value.trim())) {
            marcarError(cvc);
            valido = false;
        } else limpiarEstilo(cvc);

        if (!expRegTitular.test(titular.value.trim())) {
            marcarError(titular);
            valido = false;
        } else limpiarEstilo(titular);

        if (valido) {
            document.getElementById('payment-fields').classList.add('d-none');
            document.getElementById('payment-loading').classList.remove('d-none');
            formulario.submit();
        }
    });
});
</script>
@endsection
