<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment_note_clients', function (Blueprint $table) {
            $table->id();
        $table->foreignId('user_id_partenaire')->constrained('users');
        $table->foreignId('user_id_client')->constrained('users');
        $table->text('comment');
        $table->date('date');
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
        Schema::dropIfExists('comment_note_clients');
    }
};
