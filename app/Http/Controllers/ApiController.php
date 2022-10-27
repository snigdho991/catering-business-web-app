<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Service;
use App\Models\ThemeItem;
use App\Models\ServiceType;
use App\Models\ThemeLayout;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function selected_services(Request $request){
        $data = $request->all();
        $collection = Service::whereIn('id', $data['data'])->get();
        // Log::info($collection);

        return json_encode($collection);
    }

    public function selected_service_type(Request $request){
        $data = $request->all();
        $result = ServiceType::where('id', $data['type'])->first();
        // Log::info($result);

        return json_encode($result);
    }

    public function theme_items(Request $request){
        $items = ThemeItem::where('category', $request->category)->get();
        return json_encode($items);
    }

    public function theme_layouts_by_type(Request $request){
        $data = $request->all();
        $result = ThemeLayout::where('service_type_id', intval($data['data']))->where('custom', 0)->get();
        // Log::info($result);

        return json_encode($result);
    }
}
