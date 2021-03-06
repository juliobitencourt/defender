<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDefenderPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('defender.permission_table', 'permissions'), function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('readable_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop(config('defender.permission_table', 'permissions'));
    }
}
