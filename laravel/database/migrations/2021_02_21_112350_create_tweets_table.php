<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('zaico_number')->comment('型番');
            $table->string('zaico_name')->comment('商品名');
            $table->string('zaico_image')->comment('画像');
            $table->integer('zaico_count')->comment('在庫数');
            $table->text('content')->comment('説明')->nullable();
            $table->string('category')->comment('カテゴリー')->nullable();
            $table->string('zaico_storage')->comment('保管場所')->nullable();
            //外部キー制約を付与。mysqlの場合の記述。
            $table->bigInteger('user_id')->unsigned();
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
        Schema::dropIfExists('tweets');
    }
}
