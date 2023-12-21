<?php

namespace App\Livewire;

use App\Models\Member;
use Livewire\Component;

class ShowTeam extends Component
{
    public function render()
    {
        $data['teams'] = Member::orderBy('name', 'asc')->get();
        return view('livewire.show-team', $data);
    }
}
