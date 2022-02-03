<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facilities';

    protected $fillable = [
        'propertyId',
        'airConditioning',
        'internet',
        'cableTv',
        'petAllowed',
        'createdAt',
        'updatedAt' 
     ];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
}
