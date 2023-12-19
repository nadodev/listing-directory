<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('user_type', ['user', 'admin'])->default('user');
            $table->string('avatar')->default('/default/default-avatar.jpg');
            $table->string('banner')->default('/default/default-banner.jpg');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->text('about')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('website')->nullable();
            $table->text('fb_link')->nullable();
            $table->text('x_link')->nullable();
            $table->text('in_link')->nullable();
            $table->text('intra_link')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
