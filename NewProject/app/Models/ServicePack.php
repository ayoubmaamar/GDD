<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePack extends Model
{
    protected $table = 'SERVICE_PACK';
    protected $primaryKey = 'ID_SERVICE_PACK'; 
    protected $fillable = ['SERVICE_PACK', 'DESCRIPTION', 'PRICE'];

    public $timestamps = true;

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_pack_service', 'service_pack_id', 'service_id');
    }
}
