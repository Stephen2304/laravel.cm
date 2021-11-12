<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class Articles extends Component
{
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.user.articles', [
            'articles' => Cache::remember(
                'user-articles',
                60 * 60,
                fn () => $this->user->articles()->with('tags')->published()->recent()->limit(5)->get()
            ),
        ]);
    }
}
