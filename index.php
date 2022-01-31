<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online; ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
Strutturare le classi gestendo l'ereditarietà dove necessario; ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.
Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c); -->

<?php
require_once __DIR__ . "/classes/product.php";
require_once __DIR__ . "/classes/user.php";

// creare un utente
$newUser = new User("Alessandro", "password", "ale.manda.30@gmail.com");

// stampa le informazioni sull'utente
echo "user";
echo '<pre>';
var_dump($newUser);
echo '</pre>';

// creazione prodotti
$telefono = new Product("Xiaomi Redmi Note 9 Pro", 229.00, "Processore octa-core mediatek helio g85; 6.53'' fhd+ dotdisplay,Frequenza fino a 2.0 ghz,Batteria da 5020 mAh; 18w fast charging,Sistema operativo miui 11");
$pc = new Product("HP - PC 15s-fq2006sl Notebook", 699.99, "Sistema Operativo: Windows 10 Home 64.Processore: Intel Core i5-1135G7,Memoria: RAM 8 GB - SSD 512 GB,Display: Schermo 15.6” FHD 1920 x 1080, Micro-Edge, Antiriflesso, 250 nit, 45% NTSC,Caratteristiche: Wi-Fi, Bluetooth, Webcam HP TrueVision 720p HD microfono integrato, Casse Audio, Lettore Impronte Digitali, Tastiera e Tastierino numerico, Lettore Micro SD/SD, USB-C, USB, HDMI");
$pullover = new Product("Pullover Tommy Hilfiger", 64.90, " Puro cotone,Tecnologia termica,Girocollo,Collo, polsini e fondo a coste,Branding Tommy Hilfiger,Bandierina Tommy Hilfiger ricamata sul petto");

// aggiungi i prodotti al carrello
$newUser->addToCart($telefono);
$newUser->addToCart($pc);
$newUser->addToCart($pullover);

// carrello di stampa
echo "cart";
echo '<pre>';
var_dump($newUser->getCart());
echo '</pre>';

// nuovo utente premium
$newPremiumUser = new PremiumUser("Dante", "qwerty", "dante.15@gmail.com");

$newPremiumUser->addToCart($pc);

echo "premium user cart";
echo '<pre>';
var_dump($newPremiumUser->getCart());
echo '</pre>';
?>