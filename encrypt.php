<?php
function encryptData($data) {
    $key = "my_secure_256_bit_key";
    return openssl_encrypt(
        $data,
        "AES-256-CBC",
        $key,
        0,
        substr($key, 0, 16)
    );
}
?>
