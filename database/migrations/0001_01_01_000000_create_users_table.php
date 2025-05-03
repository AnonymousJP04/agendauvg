<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void /* Sirve para ejecutar lo que se va a crear */
    {
        Schema::create('users', function (Blueprint $table) { /*Creará una tabla users usando blueprint que es una clase de laravel que permite crear tablas en la base de datos */
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void /* Sirve para eliminar lo que se ha creado */
    {
        // Eliminar las tablas en el orden inverso al que fueron creadas
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        // Eliminar la tabla de usuarios al final para evitar problemas de clave foránea
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
}
};
