<?php
require 'vendor/autoload.php';

use WhatsappWeb\Client;

$client = new Client();
$client->on('qr', function($qr) {
    // Log the QR code or output it
    echo "QR Code: $qr\n";
});

$client->on('ready', function() {
    echo "Client is ready!\n";
});

client->on('message', function($message) {
    if ($message->body == '!ping') {
        message->reply('pong');
    }
});

client->initialize();