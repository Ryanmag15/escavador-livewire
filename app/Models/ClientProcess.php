<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientProcess extends Model
{
    use HasFactory;

    // protected $table = 'process_client'; // se quiser sobrepor o nome padrão
    protected $fillable = ['client_id', 'process_id'];

    public $incrementing = false;
    protected $keyType = 'string';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::orderedUuid();
            }
        });
    }
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function process()
    {
        return $this->belongsTo(Process::class, 'process_id');
    }
}
