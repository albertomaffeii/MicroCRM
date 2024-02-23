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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('username')->nullable();
            $table->string('phone', 15)->nullable();
            $table->string('mobile',15)->nullable();
            $table->string('email')->unique();
            $table->string('company_name', 70)->nullable();
            $table->text('address')->nullable();
            $table->string('billing_email')->nullable();            
            $table->string('company_phone', 19)->nullable();
            $table->string('tax_id1', 15)->nullable();
            $table->string('tax_id2', 15)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('photo')->nullable();
            $table->string('password', 15);
            $table->enum('role', ['admin', 'agent', 'user'])->default('user');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
