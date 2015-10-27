**Kecik Skeleton**
============

> **PayPal**: [![](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=dony_cavalera_md%40yahoo%2ecom&lc=US&item_name=Dony%20Wahyu%20Isp&no_note=0&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHostedGuest)
> 
> **Rekening Mandiri**: 113-000-6944-858, **Atas Nama**: Dony Wahyu Isprananda

Merupakan sebuah kerangka kerja yang didesain seperti framework besar pada umumnya, semua struktur sudah diatur agar mempermudah dalam mengerjakan sebuah project menggunakan Kecik Framework.

###**Struktur Direktori Kecik Skeleton**
```
+-- protected
|   +-- config
|   +-- controllers
|   +-- models
|   +-- module
|        +-- controllers
|        +-- models
|        +-- views
|   +-- team
|       +-- module1
|           +-- controllers
|           +-- models
|           +-- views
|       +-- module2
|           +-- controllers
|           +-- models
|           +-- views
|   +-- templates
|       +-- adminlte
|       +-- basic
|       +-- corlate
|       +-- margo
|       +-- sb-admin
|   +-- third_party
|   +-- views
+-- public
|   +-- assets
|       +-- adminlte
|           +-- css
|           +-- fonts
|           +-- images
|           +-- js
|       +-- basic
|           +-- css
|           +-- fonts
|           +-- images
|           +-- js
|       +-- corlate
|           +-- css
|           +-- fonts
|           +-- images
|           +-- js
|       +-- margo
|           +-- css
|           +-- fonts
|           +-- images
|           +-- js
|       +-- sb-admin
|           +-- bower_components
|           +-- css
|           +-- fonts
|           +-- images
|           +-- js
|   +-- languages
```

###**Installasi**
Untuk installasi cukup menggunakan perintah dibawah ini
```shell
composer create-project --stability=dev kecik\skeleton nama_project
```

Setelah berhasil melakukan installasi, untuk melihat hasilnya anda cukup mengakses url seperti berikut ini di browser kesayangan anda.
```
http://localhost/project-anda/public
```

Jika berhasil dan tidak terdapat error maka anda akan melihat sebuah halaman sederhana dilengkapi dengan menu-menu yang berisikan beberapa link ke contoh template-template bawaan dari Kecik Framework, yang bisa anda gunakan dan dapat membantu mempercepat pekerjaan anda dalam hal tampilan/template.

###**Config**
Untuk melakukan setting ada beberapa file setting di direktori `protected->config`, terdapat setting seperti autoload, config, container, database, debug, routes, routes_adminlte, routes_coorlate, routes_margo, routes_sb-admin, dan third_party.

**Autoload**
Digunakan untuk melakukan settingan terhadap library/pustaka apa aja yang ingin diload dan melakukan settingan untuk library/pustaka yang ingin diload, untuk cara penggunaan masing-masing library/pustaka bisa dilihat langsung di github dari masing-masing library/pustaka. Nama file konfigurasinya adalah `autoload.php`.

**Config**
Digunakan untuk melakukan setting dasar untuk project yang ingin kita buat. Nama file konfigurasinya adalah `config.php`.

**Container**
Digunakan jika anda semua controller yang ingin digunakan dimasukan kedalam *Dependency Injection Container* ini berfungsi untuk menghemat resource, karena cara kerjanya dari Dependency Injection Container adalah, tidak akan membuat sebuah Objek jika tidak digunakan, tidak akan membuat ulang Objek baru jika sebelumnya sudah pernah digunakan/dibuat. Nama file konfigurasinya adalah `container.php`.

**Database**
Digunakan untuk melakukan settingan database terhadap koneksi database, seperti settingan, driver database yang ingin digunakan, alamat host server database, username, password dan nama database yang ingin digunakan, sebelumnya pastikan terlebih dahulu bahwa library/pustaka `Database` pada setting autoload nilai enable nya sudah bernilai `TRUE`, karena nilai defaultnya adalah `FALSE`. Nama file konfigurasinya adalah `database.php`.

**Debug**
Merupakan sebuah fasilitas yang berfungsi untuk mempermudah kita dalam mengetrace kesalah koding yang kita buat, anda bisa bisa menonaktifkan bagian ini pada file `index.php` yang berada pada direktori `public`. Nama file konfigurasinya adalah `debug.php`.

**Routes**
Digunakan untuk melakukan setting route pada project yang kita buat, pada bagian ini terdapat beberapa file route yang mewakili dari route masing-masing template.

**Third Party**
Merupakan setting untuk meload secara otomatis sebuah library/pustaka yang disediakan oleh pihak ketiga, pustaka PHPWord, PHPExcel, ataupun pustaka lain yang disediakan oleh Google, Facebook, Dropbox dan lain-lain. Anda cukup meletakan file library/pustaka yang ingin digunakan tanpa harus merubah terlebih dahulu code didalamnya.
Contoh:
```
+-- protected
|   +-- third_party
|       +-- PHPWord
|           +-- Examples     ---+
|           +-- PHPWord         |-- Struktur dari PHPWord
|           +-- PHPWord.php  ---+
```

##**MVC/HMVC**
Struktur `MVC/HMVC` terletak di direktori protected, terdapat contoh sederhana seperti `Controller` pada MVC, `Model` pada MVC, dan `View` pada MVC, terdapat juga contoh sederhana untuk HMVC, sehingga dapat mempermudah anda dalam menggunakan MVC pada Kecik Framework.


##**Daftar Github Library/Pustaka dari Kecik Framework**
 1.  **Kecik Cookie** [https://github.com/kecik-framework/cookie](https://github.com/kecik-framework/session/blob/master/README-ID.md)
 2. **Kecik Database** [https://github.com/kecik-framework/database](https://github.com/kecik-framework/database)
 3. **Kecik DIC** [https://github.com/kecik-framework/dic](https://github.com/kecik-framework/dic/blob/master/README-ID.md)
 4. **Kecik Language** [https://github.com/kecik-framework/language](https://github.com/kecik-framework/language/blob/master/README-ID.md)
 5. **Kecik MVC** [https://github.com/kecik-framework/mvc](https://github.com/kecik-framework/mvc)
 6. **Kecik Session** [https://github.com/kecik-framework/session](https://github.com/kecik-framework/session/blob/master/README-ID.md)
