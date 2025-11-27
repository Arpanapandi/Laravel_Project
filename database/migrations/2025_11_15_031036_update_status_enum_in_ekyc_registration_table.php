<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{    

    public function up(): void
    {
       // ubah enum dengan raw sql (karena laravel tidak bibsa ubah langsung via blueprint)
         DB::statement("ALTER TABLE ekyc_registrations MODIFY COLUMN status ENUM('draft', 'submitted', 'accepted', 'rejected') DEFAULT 'draft'");

    }

    public function down(): void
    {
        // ROllback ke enum semula
        DB::statement("ALTER TABLE ekyc_registrations MODIFY COLUMN status ENUM('draft', 'submitted',) DEFAULT 'draft'"); 
    }
};
