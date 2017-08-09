<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service_category;
use App\Service;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        return view('podpages.services_categories');
    }

    public function index_category(Service_category $service_category)
    {
        return view('podpages.services', [
            'service_category' => $service_category->load('services')
        ]);
    }

    public function index_service(Service_category $service_category, Service $service)
    {
        return view('podpages.service', [
            'service_category' => $service_category,
            'service' => $service
        ]);
    }
}
