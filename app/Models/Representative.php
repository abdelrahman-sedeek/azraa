<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Representative
 * 
 * @property int $id
 * @property string $name
 * @property string $image
 * @property string $mobile
 * @property float $balance
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|RepresentativeOperation[] $representative_operations
 *
 * @package App\Models
 */
class Representative extends Model
{
	protected $table = 'representatives';

	protected $casts = [
		'balance' => 'float'
	];

	protected $fillable = [
		'name',
		'image',
		'mobile',
		'balance'
	];

	public function representative_operations()
	{
		return $this->hasMany(RepresentativeOperation::class);
	}
}
