<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{

    public function index(Request $request)
    {
        $query = Apartment::query();

        $sortField = $request->get('sort', 'id');
        $sortOrder = $request->get('order', 'asc');

        $allowedFields = ['number', 'house', 'floor', 'area', 'bedrooms', 'price'];

        if (in_array($sortField, $allowedFields)) {
            $query->orderBy($sortField, $sortOrder);
        }

        // Границы для этажей
        $minFloor = Apartment::min('floor') ?? 1;
        $maxFloor = Apartment::max('floor') ?? 30;

        // Границы для площади
        $minArea = Apartment::min('area') ?? 0;
        $maxArea = Apartment::max('area') ?? 200;

        // Границы для цены
        $minPrice = Apartment::min('price') ?? 0;
        $maxPrice = Apartment::max('price') ?? 100000000;

        $availableHouses = Apartment::distinct()->orderBy('house')->pluck('house');
        $availableBedrooms = Apartment::distinct()->orderBy('bedrooms')->pluck('bedrooms');
        $availableViews = Apartment::distinct()->whereNotNull('view')->pluck('view');

        // Фильтр по ОТДЕЛКЕ (чекбокс "Только с отделкой")
        if ($request->boolean('with_finishing')) {
            $query->where('finishing', 'White box');
        }

        // Фильтр по ВИДУ (кнопки)
        if ($request->has('views')) {
            $query->whereIn('view', $request->views);
        }

        // Фильтр по домам (массив)
        if ($request->has('houses')) {
            $query->whereIn('house', $request->houses);
        }

        // Фильтр по комнатам (массив)
        if ($request->has('rooms')) {
            $query->whereIn('bedrooms', $request->rooms);
        }

        // Этаж
        if ($request->filled('floor_from')) $query->where('floor', '>=', $request->floor_from);
        if ($request->filled('floor_to')) $query->where('floor', '<=', $request->floor_to);

        // Площадь
        if ($request->filled('area_from')) $query->where('area', '>=', $request->area_from);
        if ($request->filled('area_to')) $query->where('area', '<=', $request->area_to);

        // Стоимость
        if ($request->filled('price_from')) $query->where('price', '>=', $request->price_from);
        if ($request->filled('price_to')) $query->where('price', '<=', $request->price_to);

        $apartments = $query->get();

        return view('pages.apartaments', compact(
            'apartments',
            'availableHouses',
            'availableBedrooms',
            'minFloor',
            'maxFloor',
            'minArea',
            'maxArea',
            'minPrice',
            'maxPrice',
            'availableViews'
        ), ['name' => 'Apartaments']);
    }
}
