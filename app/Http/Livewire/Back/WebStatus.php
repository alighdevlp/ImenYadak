<?php

namespace App\Http\Livewire\Back;

use Livewire\Component;
use App\Models\Setting;

class WebStatus extends Component
{

    public $message = 'test';

    public function OnStatus()
    {
        $setting = Setting::first();
        $setting->site_status = 1;
        $setting->save();
    }

    public function OffStatus()
    {
        $setting = Setting::first();
        $setting->site_status = 0;
        $setting->save();
    }

    public function render()
    {
        $setting = Setting::first();
        return view('livewire.back.web-status', compact('setting'));
    }
}
