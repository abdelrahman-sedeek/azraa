<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subcategory
 * 
 * @property int $id
 * @property string $name
 * @property string $image
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $id_category
 *
 * @package App\Models
 */
class Subcategory extends Model
{
	protected $table = 'subcategories';

	protected $fillable = [
		'name',
		'image',
		'id_category'
	];
}
