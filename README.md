# Proyek-Akhir-Mata-Kuliah-Rekayasa-Web
Silakan buat CRUD + Authorization token bearer dengan menggunakan Laravel Passport

Ketentuan :

- Minimal 3 tabel CRUD : mahasiswa, dosen, makul
- Menggunakan Laravel Passport
- Menggunakan database mysql dengan ketentuan :

         nama database : crud_api
         user : crud_api
         password: password123

- Masing-masing tabel harus ada primary key
- Proteksi API menggunakan Authorization Bearer, dengan token wajib menggunakan Laravel Passport
- Ada tampilan CRUD dengan menggunakan Laravel Livewire (seperti yang dicontohkan sebelumnya)
- Ada routes API untuk untuk registrasi user baru dan login untuk mendapatkan token
- Ketentuan penamaan routing :

|  TABEL |  CREATE | READ  | UPDATE  |  DELETE |
|-----------|--------------------|------------------|--------------------|--------------------|
| mahasiswa | :/mahasiswa/create | :/mahasiswa/read | :/mahasiswa/update | :/mahasiswa/delete |
| dosen     | :/dosen/create     | :/dosen/read     | :/dosen/update     | :/dosen/delete     |
| makul     | :/makul/create     | :/makul/read     | :/makul/update     | :/makul/delete     |

- Membuat video persentasi, memberikan penjelasan dan menampilkan hasilnya dengan menggunakan REST Client (boleh menggunakan Mozilla RestClient, Postman, Curl dsb )
- Silakan dibuat dan dipresentasikan dalam bentuk video di upload ke youtube, dan video harus memberikan presentasi detail dan menjelaskan coding yang dibuat
- Source code diupload ke akun github masing-masing
- Video diupload ke akun youtube masing-masing
- URL youtube dan source code di submit di elearning