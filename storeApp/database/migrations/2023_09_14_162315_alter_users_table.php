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
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'username')) {
                $table->string('username', 24)->after('name')->unique()->nullable(false);
            }

            if (!Schema::hasColumn('users', 'type')) {
                $table->enum('type', ['user', 'admin', 'super-admin'])->after('remember_token')->default('user');
            }

            if (!Schema::hasColumn('users', 'status')) {
                $table->enum('status', ['active', 'inactive', 'blocked'])->after('type')->default('active');
            }
        });

        Schema::table('products', function (Blueprint $table) {
            if (!Schema::hasColumn('products', 'user_id')) {
                $table->unsignedBigInteger('user_id')->after('id')->nullable();
                $table->foreign('user_id')->references('id')->on('users');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'username')) {
                $table->dropColumn('username');
            }

            if (Schema::hasColumn('users', 'type')) {
                $table->dropColumn('type');
            }

            if (Schema::hasColumn('users', 'status')) {
                $table->dropColumn('status');
            }
        });
        Schema::table('products',function(Blueprint $table){
            if (Schema::hasForeignKey('products', 'products_user_id_foreign')) {
                $table->dropForeign('products_user_id_foreign');
            }
            $table->dropColumn('user_id');
            $table->dropColumn('status');
        });
    }
};
