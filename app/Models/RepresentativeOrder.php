<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RepresentativeOrder
 * 
 * @property int $id
 * @property int $representative_id
 * @property int $order_id
 * @property int $status
 * @property float|null $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class RepresentativeOrder extends Model
{
	protected $table = 'representative_orders';

	protected $casts = [
		'representative_id' => 'int',
		'order_id' => 'int',
		'status' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'representative_id',
		'order_id',
		'status',
		'price'
	];
}
