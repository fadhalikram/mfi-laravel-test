<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jejak Dermawan Sample</title>
</head>
<body>
  <?php
    $json = '{"id_shipping":224,"name":"Muhammad Firdaus","email":"muhfir88@gmail.com","address":"Menara 165, Lantai 10 (ACT) 
    Jl.TB. Simatupang Kav.1 Cilandak Timur u2013 Jakarta Selatan, 12560","country":"102","city":"3174","postal_code":"12560","phone":"081226705234","provinsi":"31","kota":"3174","kecamatan":"317404","kelurahan":"3174041003","rt_users":null,"rw_users":null,"alamat_type":"Kantor","latitude":"-6.290715","longitude":"106.809754"}';
    // $string = trim(preg_replace('/\s\s+/', ' ', $json));
    $string = preg_replace("~[\r\n]~", "",$json);
    print_r(json_decode($string));
  ?>
</body>
</html>
