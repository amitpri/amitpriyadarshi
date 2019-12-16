<?php

namespace App;

use Auth;
use KirschbaumDevelopment\NovaMail\Traits\Mailable;

use Illuminate\Notifications\Notifiable;  
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Lead extends Model
{
    use Mailable;

    public function getEmailField(): string
    {
        return 'email';
    }
}
