<?php

use App\Models\User;
use App\Models\category;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('surat_masuks', function (Blueprint $table) {
            $table->id();
            $table->text('nomor_surat');
            $table->text('isi_surat');
            $table->text('link');
            $table->foreignIdFor(category::class)->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->date('tanggal_surat');
            $table->timestamps();
            $table->string('slug');
            $table->foreignIdFor(User::class)->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_masuks');
    }
};
