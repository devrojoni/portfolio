<?php

namespace App\Http\Livewire\Backend\Setting;

use App\Models\Social;
use Livewire\Component;

class SocialForm extends Component
{ 
    public $icon;
    public $url;
    public $social_id;

    public function submit()
    {
        $this->validate([
            'icon' => 'required',
            'url' => 'required',
        ]);

        Social::updateOrCreate(['id' => $this->social_id ],[ 
          'icon' => $this->icon,
           'url' => $this->url,
        ]);

        $this->reset('icon', 'url');
    }
    public function render()
    {
        $data = Social::all();
        return view('livewire.backend.setting.social-form', compact('data'));
    }
    public function edit($id)
    {
        $data = Social::findOrFail($id);
        $this->social_id = $id;
        $this->icon = $data->icon;
        $this->url = $data->url;
    }
    public function delete($id)
    {
        Social::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');

    }
}
