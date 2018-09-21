<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Created by PhpStorm.
 * User: alexandrucalin
 * Date: 9/21/18
 * Time: 17:04
 */
class CreateGenericWheel extends Migration
{
    protected $table = 'generic_wheel';

    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->increments('id');
            $table->integer('size');
        });
    }

    public function down()
    {
        Schema::drop($this->table);
    }
}