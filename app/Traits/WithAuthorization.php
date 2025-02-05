<?php

namespace App\Traits;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait WithAuthorization
{
    public function authorize($permission)
    {
        if (!Auth::user()->hasPermission($permission)) {
            abort(403, 'Unauthorized action.');
        }
    }
}
