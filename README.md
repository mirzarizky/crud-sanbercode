# MVC dan Install Laravel

> Laravel challange from [Sanbercode](https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/week-3-tugas-harian/mvc-dan-install-laravel/).

## Target Pembelajaran
- Berkenalan dengan struktur MVC (Bagian Controller)
- Mengerti Routing Laravel
- Mengerti Penggunaan Controller di Laravel
- Handle Request dari URL dan form

## Petunjuk Pengerjaan
Masih ingat dengan challenge hari pertama materi HTML? hari ini kita akan pakai halaman tersebut di project laravel. Kamu diminta untuk membuat sebuah project Laravel. Di dalam project tersebut terdapat 3 route yaitu: Home, Register, dan Welcome.
Langkah-langkahnya adalah:
1. Buatlah route terlebih dahulu untuk setiap halaman yang ingin dibuat.
2. Buat halaman blade untuk masing-masing route yang ingin dibuat. simpanlah di folder resources/views
3. Buat dua controller : HomeController dan AuthController.
4. Route Home diatur oleh HomeController, sedangkan route Register dan Welcome diatur oleh AuthController.
5. Alur program: dimulai dari halaman Home(route: '/') terdapat link menuju route register (route: '/register') . di halaman register terdapat form untuk mengisi nama depan, nama belakang, dan isian lainnya. Ketika disubmit di halaman register, form diarahkan ke halaman welcome ( route : '/welcome') dengan membawa data nama depan dan nama belakang yang akan ditampilkan di halaman welcome tersebut.
Jika sudah berhasil, berikut output yang diinginkan:

![Preview](public/img/laravel-static.gif)
