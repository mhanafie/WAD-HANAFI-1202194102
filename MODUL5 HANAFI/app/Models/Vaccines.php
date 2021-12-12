<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Vaccines extends Model
{
    use HasFactory;

    protected $tabel = 'vaccines';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name','price','description','image'
    ];

    public function Patients()
    {
        return $this->HasMany(patients::class);
    }

}
