# Project-Web-Ifest22

**Campaign**
##To Do After Clone##
Yang Harus Dilakukan di Terminal Setelah Clone ::

1.  Tambah folder vendor dari default framework laravel
2.  Ganti nama file .env.example menjad .env
3.  Jalankan perintah composer require laravel/ui
4.  Membuat key dengan perintan (php artisan key:generate)
5.  Ubah nama database pada .env menjadi ifest22
6.  Buat database baru pada phpmyadmin dengan nama ifest22
7.  Jalankan perintah php artisan migrate
8.  Setelah berhasil jalankan perintah php artisan serve
9.  Selamat mengoding

Table Database Ifest22 :

1. Tabel Users

| **Nama Atribut** | **Tipe Data** | **Status**  |
| :--------------: | :-----------: | :---------: |
|       name       |    string     |      -      |
|      email       |    string     | primary key |
|     password     |    string     |      -      |

2. Tabel Tickets

|   **Nama Atribut**    | **Tipe Data** | **Status**  |
| :-------------------: | :-----------: | :---------: |
|         email         |    string     | foreign key |
|   intention_status    |    char[1]    |      -      |
|       da_status       |    char[1]    |      -      |
|      ctf_status       |    char[1]    |      -      |
| techno_seminar_status |    char[1]    |      -      |
|   techno_ws_status    |    char[1]    |      -      |
|    startup_status     |    char[1]    |      -      |
|     incon_status      |    char[1]    |      -      |

3. Tabel Da_forms

| **Nama Atribut** | **Tipe Data** | **Status**  |
| :--------------: | :-----------: | :---------: |
|      email       |    string     | foreign key |
|    team_name     |    string     |      -      |
|   team_leader    |    string     |      -      |
|  team_member_1   |    string     |      -      |
|  team_member_2   |    string     |      -      |

4. Tabel Ctf_forms

| **Nama Atribut** | **Tipe Data** | **Status**  |
| :--------------: | :-----------: | :---------: |
|      email       |    string     | foreign key |
|    team_name     |    string     |      -      |
|   team_leader    |    string     |      -      |
|  team_member_1   |    string     |      -      |
|  team_member_2   |    string     |      -      |

5.
