<?php

namespace App\Models\devdojoModel;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'chatter_categories';
    public $timestamps = true;

    public function discussions()
    {
        return $this->hasMany(Models::className(Discussion::class));
    }
}
