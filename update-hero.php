<?php

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;

$p = Product::where('slug', 'strawberry-cream-cake')->first();

if (!$p) {
    echo "NOT_FOUND" . PHP_EOL;
    exit;
}

$p->image_url = 'products/hero-makassar.jpg';
$p->save();

echo "UPDATED: " . $p->image_url . PHP_EOL;
