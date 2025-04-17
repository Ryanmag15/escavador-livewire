<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Process extends Model
{
    protected $fillable = ['number_cnj', 'active'];

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // UUID ordenável com prefixo de timestamp
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::orderedUuid();
            }
        });
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class, 'client_process', 'process_id', 'client_id');
    }
    
}
