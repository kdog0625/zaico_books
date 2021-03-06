<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('own_id')->comment('ユーザID');
            $table->string('prof_image')->comment('プロフィール画像')->nullable();
            $table->string('prof_content')->comment('プロフィール詳細')->nullable();
            $table->string('sex')->comment('性別')->nullable(false)->default(0)->comment('性別(1:男性 /2:女性)');
            $table->date('birthday')->comment('誕生日')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
