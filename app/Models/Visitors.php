<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'visitors';
    protected $fillable = [
        'propertyId','ip','createdAt','updatedAt' 
     ];
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
}
