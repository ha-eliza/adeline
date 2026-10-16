<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    // Главная (Моё жильё)
    public function index() {
        return view('pages.account.main', ['name' => 'LK']);
    }

    // Доска объявлений
    public function board() {
        return view('pages.account.board', ['name' => 'LK']);
    }

    // Показания (графики)
    public function chart() {
        return view('pages.account.chart', ['name' => 'LK']);
    }

    // Заявки (клипборд)
    public function clipboard() {
        return view('pages.account.clipboard', ['name' => 'LK']);
    }

    // Счета и оплата (кредит)
    public function credit() {
        return view('pages.account.credit', ['name' => 'LK']);
    }

    // Новости
    public function news() {
        return view('pages.account.news', ['name' => 'LK']);
    }
}
