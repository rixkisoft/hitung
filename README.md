[logo]: https://github.com/rixkisoft/hitung/tree/master/doc/hitung.png "Hitung"

![alt text][logo]
# Hitung
Menghitung mudah menggunakan fungsi hitung.

## Apa itu Hitung ? 
Hitung berasal dari bahasa Indonesia, bisa jadi juga dari Malaysia ataupun negara-negara lainnya yang menggunakannya sebagai artian dari proses menggabungkan nilai dan pastinya juga ada operator untuk penjumlahannya, seperti +, -, / atau : dan * atau x

Untuk jelas nya dapat langsung lihat di file nya [disini](/example/).

## Bagaimana cara menggunakan Hitung ?
Cukup sederhana, anda hanya perlu untuk mencantumkan Class Hitung ke dalam project anda, seperti:

```php
require '../src/Hitung.php';
```

Lalu anda tinggal memanggil fungsi dari Class Hitung yaitu

```php
Hitung::jumlah( $operator, $nilai_dalam_bentuk_array );
```

### Operator yang tersedia
1. Plus atau Tambah dengan operator "+", digunakan untuk menambahkan nilai pertama dengan nilai selanjutnya. Contoh:
```php
Hitung::jumlah( "+", [1,2,3,4] );

//Maka akan menghitung, 1 + 2 + 3 + 4 = 10
```
2. Minus atau Kurang dengan operator "-", digunakan untuk mengurangi nilai pertama dengan nilai selanjutnya. Contoh:
```php
Hitung::jumlah( "-", [10,2,2,1] );

//Maka akan menghitung, 10 - 2 - 2 - 1 = 5
```
3. Multiply atau Perkalian dengan operator "x" dan "*", digunakan untuk mengkalikan nilai pertama dengan nilai selanjutnya. Contoh:
```php
Hitung::jumlah( "x", [10,10,10,10] );

//Maka akan menghitung, 10 x 10 x 10 x 10 = 10000

Hitung::jumlah( "*", [5,10,5,2] );

//Maka akan menghitung, 5 * 10 * 5 * 2 = 500
```
4. Divide atau Pembagian dengan operator "/" dan ":", digunakan untuk membagi nilai pertama dengan nilai selanjutnya. Contoh:
```php
Hitung::jumlah( "/", [100000,10,2,4] );

//Maka akan menghitung, 100000 / 10 / 2 / 4 = 1250

Hitung::jumlah( ":", [50,5,2,5] );

//Maka akan menghitung, 50 : 5 : 2 : 5 = 1
```

### Nilai dalam bentuk Array
Array yang digunakan adalah array yang sederhana / tradisional, dan nilai nya tidak boleh ada yang berupa karakter atau perhitungan akan gagal. Bentuk array akan seperti `[1,2,3,4,5,6,7,8]`

### Panjang / Jumlah Array
Array dapat sepanjang mungkin, tergantung kekuatan server anda.
