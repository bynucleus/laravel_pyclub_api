<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListePresence extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;
    protected $fillable = [
        'club',
        'nom',
        'seance_id',
        'date',
    ];

    public function openPresence($crud = false)
    {
        return '<a class="btn btn-xs btn-primary"  href="admin/add-presence" data-toggle="tooltip" title="">Presence <i class="la la-link"></i> </a>';
    }
}
