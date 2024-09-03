<?php

use Bearn777\SearchableSelect\Http\Controllers\SearchableSelectController;

Route::get('/{resource}', SearchableSelectController::class."@index");
