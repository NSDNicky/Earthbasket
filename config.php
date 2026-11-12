<?php
// Keep this file OUTSIDE public_html. NEVER place your secret in index.html.
return [
  'enabled' => false, // Turn true only after KYC, shipping, tax and end-to-end testing.
  'razorpay_key_id' => 'rzp_test_REPLACE_ME',
  'razorpay_key_secret' => 'REPLACE_WITH_SECRET',
  'shipping_fee_paise' => 6000,  // Example shipping fee ₹60 (change to your policy)
  'free_shipping_min_paise' => 99900, // Example free shipping on items >= ₹999
  'allowed_pins' => [], // Empty means no automatic PIN validation: keep payments disabled until serviceability policy is resolved.
];
