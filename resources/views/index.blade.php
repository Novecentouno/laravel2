<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aleide - Esercizio</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    <body class="">
        <h1 class="">Invia la tua richiesta</h1>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Benvenuto</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Accedi</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrati</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <img src="{{URL::asset('/image/logo-aleide.png')}}" alt="aleide">
                </div>

                    
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <form class="row g-3 needs-validation m-5" novalidate>
                        <div class="col-md-6">
                            <label for="validationCustom01" class="form-label">Nome</label>
                            <input type="text" class="form-control rounded-3 border border-secondary" id="validationCustom01" value="" required>
                            <div class="valid-feedback">
                            Ottimo!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom02" class="form-label">Cognome</label>
                            <input type="text" class="form-control rounded-3 border border-secondary" id="validationCustom02" value="" required>
                            <div class="valid-feedback">
                            Ottimo!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustomDate" class="form-label">Data</label>
                            <input type="date" class="form-control rounded-3 border border-secondary" id="validationCustomDate" value="" required>
                            <div class="valid-feedback">
                            Ottimo!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustomUsername" class="form-label">E-mail</label>
                            <div class="input-group has-validation">
                            <input type="email" class="form-control rounded-3 border border-secondary" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
                            <div class="invalid-feedback">
                                Inserisci un e-mail.
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustom03" class="form-label">Provincia</label>
                            <select class="form-select border border-secondary" id="validationCustom03" required>
                                <option selected disabled value="">Scegli...</option>
                            </select>
                            <div class="invalid-feedback">
                                Inserisci una provincia.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="validationCustomCity" class="form-label">Comune</label>
                            <select class="form-select border border-secondary" id="validationCustomCity" required>
                                <option selected disabled value="">Scegli...</option>
                            </select>
                            <div class="invalid-feedback">
                                Inserisci un comune.
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="validationCustom05" class="form-label">Richiesta</label>
                            <div class="input-group">
                                <textarea class="form-control border border-secondary" aria-label="With textarea" id="validationCustom05" required></textarea>
                            </div>
                            <div class="invalid-feedback">
                                Inserisci una richiesta.
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary bg-primary" type="submit">Invia</button>
                        </div>
                    </form>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    
                </div>
            </div>
        </div>
    </body>
</html>
