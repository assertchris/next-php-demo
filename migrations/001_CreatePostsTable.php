<?php

use Next\Database\Manager;

return function() {
    Manager::schema()->create('posts', function($table) {
        $table->increments('id');
        $table->string('title');
        $table->text('content');
        $table->timestamps();
    });
};
