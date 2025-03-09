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
            $table->string('fullname')->comment('ชื่อ-นามสกุล');
            $table->date('dateofbirth')->comment('วันเดือนปีเกิด');
            $table->string('telephone_number')->comment('เบอร์ติดต่อ');
            $table->integer('user_type')->comment('ชนิดของผู้ใช้งาน')->nullable();
            $table->string('name_image')->comment('รูปโปรไฟล์')->nullable();
            $table->integer('housenumber')->comment('เลขที่บ้าน');
            $table->string('VillageNumber')->comment('หมู่ที่');
            $table->string('Alley')->comment('ซอย');
            $table->string('Road')->comment('ถนน');
            $table->string('Subdistrict')->comment('ตำบล แขวง');
            $table->string('District')->comment('อำเภอ เขต');
            $table->string('Province')->comment('จังหวัด');
            $table->string('Postal Code')->comment('รหัสไปษณี');
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
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
