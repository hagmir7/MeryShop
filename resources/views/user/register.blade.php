@extends('layout.layout')


@section('content')

<div class="row d-flex justify-content-center my-3">
    <div class="col-md-5 mt-3 card p-2 mt-2" style="border-radius:15px">
        <h1 class="h3 text-center">Inscription</h1>
        <br>

            <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
            <a href="{{ route('login.google') }}">
                <div class="google-btn">
                    <div class="google-icon-wrapper">
                        <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
                    </div>
                    <p class="btn-text"><b>Se connecter avec google</b></p>
                </div>
            </a>

            <hr>

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger p-2"> {{ $error }} </div>
        @endforeach
        <form action="{{ route('store_user') }}" method="POST" >
            @csrf
            <input type="text" name="first_name" id="first_name" class="form-control mt-2 " placeholder="Prénom" style="width: 95%; margin-left:15px">
            <input type="text" name="last_name" id="last_name" class="form-control mt-2" placeholder="Nom" style="width: 95%; margin-left:15px">
            <input type="email" name="email" id="email" class="form-control mt-2" placeholder="E-mail" style="width: 95%; margin-left:15px">
            <input type="password" name="password" id="password" class="form-control mt-2" placeholder="Mot de passe" style="width: 95%; margin-left:15px">
            <input type="password" name="password_1" id="password_1" class="form-control mt-2" placeholder="Confirmez le mot de passe" style="width: 95%; margin-left:15px">

            <button class="btn btn-pay mt-4 w-100">S'inscrire</button>

        </form>
        <a class="my-2" href="{{ route('login') }}">J'ai déjà un compte ?</a>
    </div>
</div>


@endSection
