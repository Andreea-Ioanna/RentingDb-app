<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photos extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'photos';
    protected $fillable = [
        'propertyId',
        'url',
        'createdAt',
        'updatedAt' 
     ];
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
}
