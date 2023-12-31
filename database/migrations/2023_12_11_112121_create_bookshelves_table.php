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
        Schema::create('bookshelves', function (Blueprint $table) {
            $table->id();
            $table->string('code', 10)->unique();
            $table->string('name');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->unsignedBigInteger('bookshelf_id')->after('quantity');
            $table->foreign('bookshelf_id')
            ->references('id')
            ->on('bookshelves')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
        });
          
            Schema::table('books', function (Blueprint $table) {
            $table->dropForeign('books_bookshelf_id_foreign');
            $table->dropColumn('bookshelf_id');
            });
            Schema::dropIfExists('bookshelves');
            }
};
