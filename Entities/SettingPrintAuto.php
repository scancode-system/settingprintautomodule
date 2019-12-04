<?php

namespace Modules\SettingPrintAuto\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Portal\Entities\EventSetting;

class SettingPrintAuto extends Model
{
	protected $fillable = ['id', 'number_copies', 'auto'];


	public function event_setting()
	{
		return $this->morphOne(EventSetting::class, 'configurable');
	}
}