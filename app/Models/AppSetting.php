<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AppSetting
 * 
 * @property int $id
 * @property string|null $app_version
 * @property int|null $app_status
 * @property float|null $minimum_price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $stock_low
 *
 * @package App\Models
 */
class AppSetting extends Model
{
	protected $table = 'app_settings';

	protected $casts = [
		'app_status' => 'int',
		'minimum_price' => 'float',
		'stock_low' => 'int'
	];

	protected $fillable = [
		'app_version',
		'app_status',
		'minimum_price',
		'stock_low'
	];
}
