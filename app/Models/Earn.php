<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Earn
 * 
 * @property int $id
 * @property int $order_id
 * @property float|null $earning
 * @property float|null $total_discount_price
 * @property float|null $total_price
 * @property float|null $total_products_count
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Earn extends Model
{
	protected $table = 'earns';

	protected $casts = [
		'order_id' => 'int',
		'earning' => 'float',
		'total_discount_price' => 'float',
		'total_price' => 'float',
		'total_products_count' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'order_id',
		'earning',
		'total_discount_price',
		'total_price',
		'total_products_count',
		'status'
	];
}
