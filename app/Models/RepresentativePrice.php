<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RepresentativePrice
 * 
 * @property int $id
 * @property int $representative_id
 * @property int $order_id
 * @property float $price
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class RepresentativePrice extends Model
{
	protected $table = 'representative_prices';

	protected $casts = [
		'representative_id' => 'int',
		'order_id' => 'int',
		'price' => 'float',
		'status' => 'int'
	];

	protected $fillable = [
		'representative_id',
		'order_id',
		'price',
		'status'
	];
}
