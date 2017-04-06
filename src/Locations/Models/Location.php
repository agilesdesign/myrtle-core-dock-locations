<?php

namespace Myrtle\Core\Locations\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Myrtle\Core\Phones\Models\Traits\Phoneable;
use Myrtle\Core\Addresses\Models\Traits\Addressable;

class Location extends Model {

	use Addressable, Phoneable, SoftDeletes;

	protected $fillable = ['name'];

	protected $with = ['addresses', 'phones'];
}
