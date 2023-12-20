<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 * 
 * @property int $id
 * @property int $product_id
 * @property int $main_pro_id
 * @property int $user_id
 * @property int $quantity
 * @property int $quantity_final
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Cart extends Model
{
	protected $table = 'carts';

	protected $casts = [
		'product_id' => 'int',
		'main_pro_id' => 'int',
		'user_id' => 'int',
		'quantity' => 'int',
		'quantity_final' => 'int'
	];

	protected $fillable = [
		'product_id',
		'main_pro_id',
		'user_id',
		'quantity',
		'quantity_final'
	];
}
