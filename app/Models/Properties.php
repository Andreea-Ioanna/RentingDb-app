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
    protected $fillable = [
        'userId','description','price','address','area','latitude','longitude','rooms','active','deposit','utilities','period','type','available','createdAt','updatedAt' 
     ];
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';
}
