<?php

namespace Modules\SettingPrintAuto\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\SettingPrintAuto\Entities\SettingPrintAuto;

class SettingPrintAutoController extends Controller
{


    public function update(Request $request, SettingPrintAuto $setting_print_auto)
    {
        $setting_print_auto->update($request->all());
        return back()->with('success', 'Configuração de impressão alterado.');
    }


}