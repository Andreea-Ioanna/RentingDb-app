<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'properties';
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
}
