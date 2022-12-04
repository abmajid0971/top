<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string("Rank");
            $table->string("Name");
            $table->string("Icon");
            $table->string("Promo_Text_TOP");
            $table->string("Promo_text_1");
            $table->string("Promo_text_2");
            $table->string("Promo_text_3");
            $table->string("Score");
            $table->string("Stars");
            $table->string("Ages");
            $table->string("Visit_Site_Click_URL");
            $table->string("text_below_click_url");
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
        Schema::dropIfExists('offers');
    }
}
