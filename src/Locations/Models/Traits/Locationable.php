<?php

namespace Myrtle\Core\Locations\Models\Traits;

use Myrtle\Locations\Models\Location;

trait Locationable
{
	public function locations()
	{
		return $this->morphMany(Location::class, 'locationable');
	}

	public function getPrimaryLocationAttribute()
	{
		if(!$this->settings)
		{
			return null;
		}
		$primaryLocationId = $this->settings->options['primary_location_id'] ?? null;

		if ($this->locations->isEmpty() && $primaryLocationId)
		{
			return null;
		}

		return $this->locations->reject(function ($location, $key) use ($primaryLocationId)
		{
			return $location->id != $primaryLocationId;
		})->first();
	}
}