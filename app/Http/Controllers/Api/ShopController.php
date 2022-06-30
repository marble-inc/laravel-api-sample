<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ShopResource;
use App\Models\Shop;

class ShopController extends Controller
{
    /**
     * 店舗一覧取得
     *
     * 同時にメニュー情報も付属します。
     *
     * @unauthenticated
     * @group Shop
     *
     * @apiResourceCollection App\Http\Resources\Api\ShopResource
     * @apiResourceModel App\Models\Shop with=menus
     */
    public function index()
    {
        return ShopResource::collection(Shop::all());
    }
}