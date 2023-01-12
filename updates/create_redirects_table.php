<?php

declare(strict_types=1);

namespace Dimsog\Seo\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateRedirectsTable extends Migration
{
    public function up()
    {
        Schema::create('dimsog_seo_redirects', static function (Blueprint $table): void {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
            $table->integer('code');
            $table->string('from');
            $table->string('to');
        });
    }

    public function down()
    {
        Schema::dropIfExists('dimsog_seo_redirects');
    }
}
