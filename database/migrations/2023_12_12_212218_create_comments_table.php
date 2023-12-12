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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Ajoutez le champ user_id
            $table->unsignedBigInteger('post_id')->nullable(); // Ajoutez le champ post_id
            $table->text('content');
            $table->integer('likes');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); // Ajoutez la clé étrangère pour user_id
            $table->foreign('post_id')->references('id')->on('posts'); // Ajoutez la clé étrangère pour post_id
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
