<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tintucs', function (Blueprint $table) {
            $table->integer('id',true);
            $table->string('matintuc', 191);
            $table->text('tieude');
            $table->text('tomtat');
            $table->text('noidung');
            $table->string('slug', 191)->nullable();
            $table->string('anh', 191)->default('default.jpg');
            $table->string('madm',20);
            $table->integer('danhmuc')->nullable()->index('danhmuc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tintucs');
    }
};
