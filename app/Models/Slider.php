<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Slider
 * 
 * @property int $id
 * @property string $name
 * @property string $image
 * @property int $id_subcategory
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Slider extends Model
{
	protected $table = 'sliders';

	protected $casts = [
		'id_subcategory' => 'int'
	];

	protected $fillable = [
		'name',
		'image',
		'id_subcategory'
	];
}
