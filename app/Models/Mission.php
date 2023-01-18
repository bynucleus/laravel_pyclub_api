<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    protected $fillable = [
        'classe',
        'club',
        'description',
        'lien',
        'debut',
        'fin',
        'pcc',
        'created_at',

    ];

    public function setLienAttribute($value)
    {
        $attribute_name = "lien";
        $disk = "docs";
        $destination_path = "documents";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path, $fileName = null);

    // return $this->attributes[{$attribute_name}]; // uncomment if this is a translatable field
    }
}
