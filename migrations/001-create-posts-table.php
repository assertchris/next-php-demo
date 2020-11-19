<?php

use Next\Database;

return function() {
    Database::schema()->create('posts', function($table) {
        $table->increments('id');
        $table->string('title');
        $table->text('content');
        $table->timestamps();
    });
};
