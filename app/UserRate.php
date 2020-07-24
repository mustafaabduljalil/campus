<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRate extends Model
{
    //

    /**
     * Get the owning ratable model.
     */
    public function ratable()
    {
        return $this->morphTo();
    }
}
