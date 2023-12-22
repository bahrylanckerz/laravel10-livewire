<?php

namespace App\Livewire;

use App\Models\Faq;
use Livewire\Component;

class ShowFaq extends Component
{
    public function render()
    {
        $data['faqs'] = Faq::where('status', '1')->get();
        return view('livewire.show-faq', $data);
    }
}
