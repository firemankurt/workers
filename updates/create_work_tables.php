<?php namespace KurtJensen\Workers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateWorkTables extends Migration
{

    public function up()
    {
    // --  Skills  --
        
        Schema::create('kurtjensen_workers_skills', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->index();
            $table->text('description')->nullable();
            $table->timestamps();
        });
        
        
        Schema::create('kurtjensen_workers_user_skill', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('skill_id')->unsigned();
            $table->timestamp('begining_at')->nullable();
            $table->timestamp('ending_at')->nullable();
        });

    }

    public function down()
    {
        
        Schema::dropIfExists('kurtjensen_workers_user_skill');
        Schema::dropIfExists('kurtjensen_workers_skills');
    }

}
