<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;

class UserCollection extends Collection
{
    public function groupByRelativeDate(): UserCollection
    {
        return $this->groupBy(function (User $user) {
            return match (true) {
                $user->created_at->isToday() => 'today',
                $user->created_at->isYesterday() => 'yesterday',
                default => 'other',
            };
        });
    }
}