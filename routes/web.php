<?php

Route::get('folders/{id}/tasks', 'TaskContorller@index') ->name('task.index');