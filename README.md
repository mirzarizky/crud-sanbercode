# CRUD Laravel

> Laravel challange from [Sanbercode](https://blog.sanbercode.com/docs/kurikulum-laravel-web-development/week-3-tugas-harian/crud-laravel/).

## Membuat Database Migrations
Di dalam project laravel baru, buatlah database migrations menggunakan rancangan ERD Larahub yang dibuat di tugas rancang ERD sebelumnya. (CATATAN: Cukup table Pertanyaan dan Jawaban saja, tidak usah semua table)

## Membuat Model
Di bagian ini kalian diminta untuk membuat model untuk table pertanyaan dan table jawaban (masing–masing satu model).
Model yang dibuat digunakan untuk keperluan proses CRUD (Create Read Update dan Delete)

## Proses CRUD
Setelah table dan model tersedia, maka kita dapat mulai membuat proses CRUD. Buatlah CRUD untuk jawaban dan pertanyaan. Berikut ini gambaran Route dan Controller yang diinginkan
| url | Methods | handler | Keterangan |
| :------------ | :------------ | :------------ | :------------ |
| /pertanyaan | GET | PertanyaanController@index | menampilkan tabel berisi data pertanyaan-pertanyaan | 
| /pertanyaan/create|  GET |  PertanyaanController@create | menampilkan form untuk membuat pertanyaan baru |
| /pertanyaan |  POST | PertanyaanController@store | menyimpan data baru ke tabel pertanyaan |
| /jawaban/{pertanyaan_id} | GET | JawabanController@index | menampilkan jawaban dari pertanyaan dengan id tertentu |
| /jawaban/{pertanyaan_id} | POST |  JawabanController@store | menyimpan jawaban baru untuk pertanyaan dengan id tertentu |

