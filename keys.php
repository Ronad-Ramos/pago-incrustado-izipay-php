<?php
/**
 * Get the client
 */
require_once __DIR__ . '/rest-php-sdk-master/src/autoload.php';

/**
 * Define configuration
 */

/* Username, password and endpoint used for server to server web-service calls */
//(En el Back Office) Copiar Usuario
Lyra\Client::setDefaultUsername("55579682");
//(En el Back Office) Copiar Contraseña de test
Lyra\Client::setDefaultPassword("testpassword_lJW13iYDE9nwmrJD7M7rGXmdRaZzvpoTRwRScsDQmewfR");
//(En el Back Office) Copiar Contraseña de Nombre del servidor API REST
Lyra\Client::setDefaultEndpoint("https://api.micuentaweb.pe");

/* publicKey and used by the javascript client */
//(En el Back Office) Copiar Clave pública de test
Lyra\Client::setDefaultPublicKey("55579682:testpublickey_wcgEPYT7gxPzUJEJE6HfnmbG18Hj8mMPBd2JUumwu8Lkn");

/* SHA256 key */
//(En el Back Office) Clave HMAC-SHA-256 de test
Lyra\Client::setDefaultSHA256Key("Yga5AOlU5qomnyEj3EQvwMvpotybpd7q4Yk0z9ZZtUaJQ");