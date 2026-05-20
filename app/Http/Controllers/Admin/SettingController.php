<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::paginate(20);
        $setting = Setting::find(1);
        return view('admin.section.setting.index', ['settings' => $settings, 'setting' => $setting]);
    }


    public function clearCache()
    {
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
        Artisan::call('route:clear');

        return back()->with("success", "Cache cleared successfully");
    }

    // public function create()
    // {
    //     return view('admin.section.setting.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'key' => 'required|unique:settings,key',
    //         'value' => 'required',
    //     ]);

    //     Setting::create($request->all());

    //     return redirect()->back()->with('success', 'Setting created successfully.');
    // }

    // public function edit(Setting $setting)
    // {
    //     return view('admin.section.setting.index', compact('setting'));
    // }

    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'value' => 'required',
        ]);

        $setting->update($request->all());

        return redirect()->back()->with('success', 'Setting updated successfully.');
    }

    // public function destroy(Setting $setting)
    // {
    //     $setting->delete();

    //     return redirect()->back()->with('success', 'Setting deleted successfully.');
    // }
}
