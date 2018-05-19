<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dataset
 * 
 * @property int $id
 * @property string $Produce_Variety
 * @property string $Commodity_Type
 * @property string $Unit
 * @property int $Volume_in_Kgs
 * @property string $Values_in_Ksh
 * @property string $Date
 * @property int $OBJECTID
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Dataset extends Model
{
	protected $casts = [
		'Volume_in_Kgs' => 'int',
		'OBJECTID' => 'int'
	];

	protected $fillable = [
		'Produce_Variety',
		'Commodity_Type',
		'Unit',
		'Volume_in_Kgs',
		'Values_in_Ksh',
		'Date',
		'OBJECTID'
	];
}
