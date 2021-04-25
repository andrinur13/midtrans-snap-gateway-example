<?php

namespace Midtrans;

use Exception;

require_once dirname(__FILE__) . '/vendor/autoload.php';
//Set Your server key
Config::$serverKey = "midtrans-key";

// Uncomment for production environment
Config::$isProduction = false;

// Uncomment to enable sanitization
Config::$isSanitized = true;

// Uncomment to enable 3D-Secure
Config::$is3ds = true;


// yang ini nnti dihapus gpp/ini untuk redirect pages, ketika transaksi berhasil dilakukan (pesan berhasil)

// Add new notification url(s) alongside the settings on Midtrans Dashboard Portal (MAP)
Config::$appendNotifUrl = "https://example.com/test1,https://example.com/test2";
// Use new notification url(s) disregarding the settings on Midtrans Dashboard Portal (MAP)
Config::$overrideNotifUrl = "https://example.com/test1";


// Required
$transaction_details = array(
    'order_id' => rand(), // ini nanti dikasih dari id transaksi/order di aplikasi ajamas
    'gross_amount' => 145000, // no decimal allowed for creditcard
);

// Optional
$item1_details = array(
    'id' => 'a1',
    'price' => 50000,
    'quantity' => 2,
    'name' => "Apple"
);

// Optional
$item2_details = array(
    'id' => 'a2',
    'price' => 45000,
    'quantity' => 1,
    'name' => "Orange"
);

// Optional
$item_details = array($item1_details, $item2_details);

// Optional
$billing_address = array(
    'first_name'    => "Andri",
    'last_name'     => "Nur",
    'address'       => "Bantul",
    'city'          => "Yogyakarta",
    'postal_code'   => "55763",
    'phone'         => "081234567890",
    'country_code'  => 'IDN'
);

// // Optional
// $shipping_address = array(
//     'first_name'    => "Obet",
//     'last_name'     => "Supriadi",
//     'address'       => "Manggis 90",
//     'city'          => "Jakarta",
//     'postal_code'   => "16601",
//     'phone'         => "08113366345",
//     'country_code'  => 'IDN'
// );

// Optional
$customer_details = array(
    'first_name'    => "Andri",
    'last_name'     => "Nur",
    'email'         => "andribis13@gmail.com",
    'phone'         => "081234567890",
    'billing_address'  => $billing_address
);

// Fill SNAP API parameter
$params = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details
    // 'item_details' => $item_details,
);

// echo "Berhasil gan";

try {
    // Get Snap Payment Page URL
    $paymentUrl = Snap::createTransaction($params)->redirect_url;
  
    // Redirect to Snap Payment Page
    header('Location: ' . $paymentUrl);
}
catch (Exception $e) {
    echo $e->getMessage();
}
