<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::get();

        return view('services.services', [
            'services' => $services
        ]);
    }

    public function create()
    {
        $services = Service::get();
        $serviceTypes = ServiceType::get();

        return view('services.create', [
            'services' => $services,
            'types' => $serviceTypes,
        ]);
    }

    public function create_service(Request $request)
    {
        // dd($request);
        $this->validate($request, [
            'kind' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|integer'
        ]);
        // dd('verified');

        auth()->user()->services()->create([
            'type' => $request->kind,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('dashboard');


    }

    public function create_service_type()
    {
        $serviceTypes = array('Hair', 'Nails', 'Feet', 'Skin');
        foreach ($serviceTypes as $type){
            ServiceType::create([
                'type' => $type
            ]);
        }
    }
}

