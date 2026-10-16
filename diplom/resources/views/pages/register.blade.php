@extends('layouts.auth')

@section('content')
    <x-auth.header>
        Регистрация
    </x-auth.header>

    <x-auth.form :action="route('register')" btn="Зарегистрироваться">

        <x-auth-input label="Имя" name="name" type="text" />
        <x-auth-input label="e-mail" name="email" type="email" />
        <x-auth-input label="Пароль" name="password" type="password" />
        <x-auth-input label="Повторите пароль" name="password_confirmation" type="password" />

    </x-auth.form>

    <x-auth.footer :route="route('login')">
        Вход
    </x-auth.footer>

@endsection
