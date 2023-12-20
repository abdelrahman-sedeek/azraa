<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CartReturn
 * 
 * @property int $id
 * @property int $product_id
 * @property int $user_id
 * @property int $quantity
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class CartReturn extends Model
{
	protected $table = 'cart_returns';

	protected $casts = [
		'product_id' => 'int',
		'user_id' => 'int',
		'quantity' => 'int'
	];

	protected $fillable = [
		'product_id',
		'user_id',
		'quantity'
	];
}
