@extends('layouts.layout')

@section('title', 'Register')
@section('content')

<section class="vh-100" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card border border-0" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://images.unsplash.com/photo-1720437547757-34d7b67eae00?q=80&w=1978&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; object-fit: cover; object-position: center; height: 100%; border: none;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <form id="register-form">
                                    <div class="d-flex align-items-center mb-3 pb-1">
                                        <span class="h1 fw-bold mb-0">Proyecto Prueba</span>
                                    </div>

                                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Create an account</h5>

                                    <div class="form-outline mb-1">
                                        <input type="text" id="name" name="name" class="form-control form-control-lg" required autofocus/>
                                        <label class="form-label" for="name">Full Name</label>
                                        <span class="text-danger" id="error-name"></span>
                                    </div>

                                    <div class="form-outline mb-1">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
                                        <label class="form-label" for="email">Email Address</label>
                                        <span class="text-danger" id="error-email"></span>
                                    </div>

                                    <div class="form-outline mb-1">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                                        <label class="form-label" for="password">Password</label>
                                        <span class="text-danger" id="error-password"></span>
                                    </div>
                                    
                                    <div class="form-outline mb-1">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required/>
                                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                                        <span class="text-danger" id="error-password_confirmation"></span>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" type="submit">Register</button>
                                    </div>

                                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Do have an account? <a href={{ route('login') }}
                                        style="color: #393f81;">Login here</a></p>
                                    <a href="#!" class="small text-muted">Terms of use.</a>
                                    <a href="#!" class="small text-muted">Privacy policy</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        console.log('Funcionando')
        $('#register-form').on('submit', function(e) {
            e.preventDefault();

            var formData = {
                name: $('#name').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                password_confirmation: $('#password_confirmation').val(),
                _token: '{{ csrf_token() }}'
            };

            $.ajax({
                type: 'POST',
                url: '{{ route("register") }}',  // Cambia esto a la ruta correcta si es diferente
                data: formData,
                success: function(response) {
                    if (response.redirect) {
                        window.location.href = response.redirect;  // Redirige a la URL proporcionada en la respuesta
                    } else {
                        window.location.href = '{{ route("login") }}';  // Redirige a la página de login si no hay URL en la respuesta
                    }
                },
                error: function(response) {
                    $('.text-danger').empty();  // Limpiar mensajes de error previos
                    $.each(response.responseJSON.errors, function(key, value) {
                        $('#error-' + key).text(' ('+value[0]+')');
                    });
                }
            });
        });
    });
</script>

@endsection
