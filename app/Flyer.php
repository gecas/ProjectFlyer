<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{

	protected $fillable = [
		'street',
		'city',
		'state',
		'country',
		'zip',
		'price',
		'description'
	];


	public static function LocatedAt($zip, $street)
	{
		$street = str_replace('-', ' ', $street);
		//$street = str_slug($street, '-');

		return static::where(compact('zip','street'))->firstOrFail();
	}

	public function addPhoto(Photo $photo)
	{
		return $this->photos()->save($photo);
	}

	public function getPriceAttribute($price)
	{
		return '€' . number_format($price);
	}

    public function photos()
    {	
    	return $this->hasMany('App\Photo');
    }

}
