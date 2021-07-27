<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceType;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        // dd(auth()->user());
        if (auth()->user()->type === '0'){
            $services = Service::get();

            return view('services.services', [
                'services' => $services
            ]);
        }
        elseif(auth()->user()->type === '1'){
            $services = Service::where('user_id',auth()->user()->id)->get();
            return redirect()->route('dashboard', [
                'services' => $services
            ]);
        }
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

        $this->validate($request, [
            'kind' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|integer'
        ]);


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

