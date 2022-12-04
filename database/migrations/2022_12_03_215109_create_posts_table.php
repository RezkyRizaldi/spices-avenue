<?php

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class);
            $table->foreignIdFor(Author::class);
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('image')->nullable();
            $table->text('excerpt');
            $table->text('body');
            $table->timestamp('published_at')->default(now());
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
