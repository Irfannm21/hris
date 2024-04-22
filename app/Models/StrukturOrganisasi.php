<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StrukturOrganisasi extends Model
{
    use HasFactory;

    protected $table = 'ref_struktur';

    protected $fillable =
    [
        'tingkat',
        'name',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
    ];



}
