<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('confessions', function (Blueprint $table) {
            $table->string('name')->nullable()->after('id');
            $table->string('sexe')->nullable()->after('name');
            $table->integer('age')->nullable()->after('sexe');
        });
    }

    public function down()
    {
        Schema::table('confessions', function (Blueprint $table) {
            $table->dropColumn(['name', 'sexe', 'age']);
        });
    }
};