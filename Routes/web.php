<?php

Route::prefix('settingprintauto')->group(function() {
	Route::put('{setting_print_auto}', 'SettingPrintAutoController@update')->name('settingprintauto.update');
});
