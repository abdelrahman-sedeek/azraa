<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserActivityReport
 * 
 * @property int $id
 * @property int $user_id
 * @property float $total_discounted_price
 * @property int $orders_count
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class UserActivityReport extends Model
{
	protected $table = 'user_activity_reports';

	protected $casts = [
		'user_id' => 'int',
		'total_discounted_price' => 'float',
		'orders_count' => 'int'
	];

	protected $fillable = [
		'user_id',
		'total_discounted_price',
		'orders_count'
	];
}
