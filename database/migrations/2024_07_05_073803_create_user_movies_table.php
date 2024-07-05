<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_movies', function (Blueprint $table) {
            $table->id();

            //New fields
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrained();

            $table->string("title");
            $table->integer('year');
            $table->text('description');
            $table->float('rating');
            $table->integer('ranking')->default(10);
            $table->string('review');
            $table->string('img_url');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_movies');
    }
};
