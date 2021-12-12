<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    use HasFactory;
    
    protected $tabel = 'patients';
    protected $primaryKey = 'id';

    protected $fillable = [
        'vaccine_id','name','nik','alamat','image_ktp','no_hp'
    ];

    public function Vaccines()
    {
        return $this->belongsTo(Vaccines::class);
    }
}
