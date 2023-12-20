<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $name
 * @property int $category_id
 * @property string $image
 * @property string $description
 * @property Carbon $date_added
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string|null $barcode
 * @property int $total_allowed_quantity
 * @property int $subcategory_id
 * @property int|null $status
 * @property int $stock
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';

	protected $casts = [
		'category_id' => 'int',
		'date_added' => 'datetime',
		'total_allowed_quantity' => 'int',
		'subcategory_id' => 'int',
		'status' => 'int',
		'stock' => 'int'
	];

	protected $fillable = [
		'name',
		'category_id',
		'image',
		'description',
		'date_added',
		'barcode',
		'total_allowed_quantity',
		'subcategory_id',
		'status',
		'stock'
	];
}
