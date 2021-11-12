<?php

namespace App\Contracts;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\MorphMany;

interface SubscribeInterface
{
    public function subscribes(): MorphMany;

    public function hasSubscriber(User $user): bool;
}
