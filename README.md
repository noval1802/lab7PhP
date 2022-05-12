# Pembuatan Web Server dari Menu XAMPP
## Langkah Langkah Menggunakan XMPP Dengan Menggunakan Format Dokumen (.php)

### 1. Menjalankan Web Server 

Untuk menjalankan web server dari menu XAMPP Control

![xmpp](asset/img/xmppServer.png)

### 2. Memulai PHP 
Buat folder **lab7_php_dasar** pada root directory web server **(c:\xampp\htdocs)**.

![htdocs](asset/img/htdocs.png)
Kemudian untuk mengakses directory tersebut pada web server dengan mengakses URL: http://localhost/lab7_php_dasar/

![localhost](asset/img/localhost.png)

### 3. PHP Dasar
Buat file baru dengan nama *dasar.php* pada directory tersebut. Kemudian buat kode seperti berikut. 

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
    <?php
        echo "Hello world";
    ?>
</body>
</html>
```
Kemudian untuk mengakses hasilnya melali URL: http://localhost/lab7_php_dasar/dasar.php

![dasarPHP](asset/img/dasarPHP.png)
