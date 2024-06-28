<?php

use Kfriars\SearchableSelect\Http\Controllers\SearchableSelectController;

Route::get('/{resource}', SearchableSelectController::class."@index");
