@extends('layouts.auth')

@section('content')
    <x-auth.header>
        Вход
    </x-auth.header>

    <x-auth.form :action="route('login')" btn="Войти">

        <x-auth-input label="e-mail" name="email" type="email" />
        <x-auth-input label="Пароль" name="password" type="password" />

    </x-auth.form>

    <x-auth.footer :route="route('register')">
        Регистрация
    </x-auth.footer>
@endsection
