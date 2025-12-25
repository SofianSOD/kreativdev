<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingController extends Controller
{
    public function index()
    {
        $packages = [
            [
                "name" => "Paket Rintis",
                "description" => "Tampil online dengan website simpel dan profesional.",
                "original_price" => "Rp3.000.000",
                "discounted_price" => "Rp1.500.000",
                "discount_label" => "Diskon 50%",
                "renewal_price" => "Rp800.000",
                "features" => [
                    "1 Halaman Website",
                    "Gratis Domain",
                    "Gratis Update Konten & Maintenance",
                    "Website Mobile Friendly & SEO Basic",
                    "Desain Modern & Sesuai Karakter Bisnis Kamu"
                ],
                "is_highlighted" => false
            ],
            [
                "name" => "Paket Kembang",
                "description" => "Website lebih lengkap untuk dukung perkembangan bisnismu.",
                "original_price" => "Rp10.000.000",
                "discounted_price" => "Rp4.500.000",
                "discount_label" => "Diskon 55%",
                "renewal_price" => "Rp1.500.000",
                "features" => [
                    "Semua di Paket Rintis",
                    "5 Halaman Website",
                    "Desain Modern & Sesuai Karakter Bisnis Kamu",
                    "Halaman Produk, Layanan, Galeri, atau Portofolio",
                    "Fitur Tambahan seperti Form Kontak"
                ],
                "is_highlighted" => true
            ],
            [
                "name" => "Paket Unggul",
                "description" => "Maksimalkan performa dan pengalaman pengguna.",
                "original_price" => "Rp15.000.000",
                "discounted_price" => "Rp8.500.000",
                "discount_label" => "Diskon 45%",
                "renewal_price" => "Rp2.500.000",
                "features" => [
                    "Semua di Paket Kembang",
                    "10 Halaman Website",
                    "Desain Lebih Eksklusif & Premium",
                    "Fitur Tambahan seperti Booking, Katalog, atau Integrasi Lainnya",
                    "Optimasi SEO Lebih Maksimal",
                    "Layanan Bantuan Prioritas"
                ],
                "is_highlighted" => false
            ]
        ];

        return view('pricing.index', compact('packages'));
    }
}
