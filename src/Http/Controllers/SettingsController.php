<?php

namespace GitLab\Ripple\Http\Controllers;

use GitLab\Ripple\Models\Setting;
use GitLab\Ripple\Support\Traits\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    use Settings;

    public function settings()
    {
        if (request()->has('setting-create')):
            self::saveSetting();

        return back(); elseif (request()->has('setting-update')):
            self::updateSetting();

        return back(); elseif (request()->has('setting-delete')):
            return self::deleteSetting();
        endif;
        $settings = self::hasSettings();

        return view('Ripple::settings.settings', compact('settings'));
    }

    public function createSetting()
    {
        if (request()->has('setting-create')):
            self::saveSetting();

        return redirect()->route('Ripple::adminSettings');
        endif;

        return view('Ripple::settings.create-setting');
    }
}
