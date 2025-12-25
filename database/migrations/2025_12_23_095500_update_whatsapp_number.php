<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Setting::updateOrCreate(
            ['key' => 'contact_whatsapp'],
            ['value' => '62895365639577', 'type' => 'text']
        );

        Setting::updateOrCreate(
            ['key' => 'hero_cta_url'],
            ['value' => 'https://wa.me/62895365639577', 'type' => 'url']
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // No need to reverse strictly, just leaving as is
    }
};
