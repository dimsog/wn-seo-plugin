<?php

declare(strict_types=1);

namespace Dimsog\Seo\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateRedirectStatisticsTable extends Migration
{
    public function up()
    {
        Schema::create('dimsog_seo_redirect_statistics', static function (Blueprint $table): void {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('redirect_id');
            $table->string('user_ip');
            $table->string('user_agent', 1024)->nullable();

            $table->foreign('redirect_id')
                ->references('id')
                ->on('dimsog_seo_redirects')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimsog_seo_redirect_statistics');
    }
}
