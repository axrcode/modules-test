<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modules;
use Illuminate\Support\Facades\Artisan;

class ModuleController extends Controller
{
    public function index()
    {
        $modules = Modules::all();

        return view('modules.edit', compact('modules'));
    }

    public function enable(Request $request)
    {
        $module = Modules::find($request->module_id);

        if ( boolval($module->enable) ) {
            $command = "module:disable ".$module->alias;
            $enable = false;
        } else {
            $command = "module:enable ".$module->alias;
            $enable = true;
        }

        // Ejecutar el comando de consola
        $output = Artisan::call($command);
        $result = Artisan::output();

        $module->enable = $enable;
        $module->update();

        return redirect()->route('modules.index');
    }
}
