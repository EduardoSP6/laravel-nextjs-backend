<?php

namespace App\Traits;

use Webpatser\Uuid\Uuid;

trait Uuids
{

    /**
     * Boot function from laravel.
     */
    protected static function bootUuids()
    {
        static::creating(function ($model) {
            $model->uuid = Uuid::generate()->string;
        });
    }

    /**
     * Sobrescreve o nome da chave primaria que sera trabalhada no route model binding.
     * Com isso nao ha mais necessidade de declarar o binding no RouteServiceProvider
     */
    public function getRouteKeyName()
    {
        return 'uuid';
    }

    /**
     * Query scope para obter registro relacionado ao uuid
     */
    public function scopeFindByUuid($query, $uuid)
    {
        return $query->where('uuid', $uuid)->first();
    }
}