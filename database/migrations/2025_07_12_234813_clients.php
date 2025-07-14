<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table
                ->id();
            $table
                ->string('cpf')
                ->nullable(false);
            $table
                ->string('name')
                ->nullable(false);
            $table
                ->date('birthdate')
                ->nullable(false);
            $table
                ->string('gender')
                ->nullable(false);
            $table
                ->string('address')
                ->nullable(false);
            $table
                ->string('state')
                ->nullable(false);
            $table
                ->string('city')
                ->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('clients');
    }
};
