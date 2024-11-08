<?php

namespace App;

use App\Models\User;
use Illuminate\Container\Attributes\CurrentUser;

class ExamSession
{


    public function __construct(#[CurrentUser] protected User $user)
    {
    }
}