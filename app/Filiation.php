<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Filiation extends Model
{
    use Notifiable;

    public $cityName;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_name'
    ];

    /**
     * Возвращаем города, с которыми работаем
     * @return array
     */
    public function getFiliations()
    {
        $filiations = Filiation::all();

        foreach ($filiations as $item) {
            $item->cityName = $item->getAttributes()['city_name'];
            $item->id = $item->getAttributes()['id'];
            $filiation[] = $item;
        }

        return $filiation;
    }

    /**
     * @param int $filialId
     * @return striing
     */
    public function getFilialName($filialId = null)
    {
        if (!$filialId)
            return "";

        $filial = Filiation::where('id', $filialId)->first();

        if ($filial->city_name)
            return $filial->city_name;

        return "неизвестно";
    }

}
