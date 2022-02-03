<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tenant';
    protected $fillable = [
        'propertyId','firstName','lastName','email','job','description','photo','createdAt','updatedAt' 
     ];
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
}
