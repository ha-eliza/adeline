<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class MediaController extends Controller
{
    public function uploadVideo(Request $request)
    {
        $file = $request->file('video')->getRealPath();

        // метод для видео
        $result = Cloudinary::uploadVideo($file, [
            'folder' => 'videos',
            'overwrite' => true,
            'resource_type' => 'video'
        ]);

        $videoUrl = $result->getSecurePath();

        return back()->with('status', 'Видео готово: ' . $videoUrl);
    }

    public function uploadImage(Request $request)
    {
        // Загрузка и сохранение в папку 'products' на Cloudinary
        $result = $request->file('photo')->storeOnCloudinary('products');

        // Получение прямой ссылки для сохранения в БД
        $url = $result->getSecurePath();

        return back()->with('status', 'Фото загружено: ' . $url);
    }
}
