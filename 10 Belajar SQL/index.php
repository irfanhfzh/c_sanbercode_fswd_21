<!-- Apa Itu SQL?

SQL atau Structured Query Language) adalah sebuah bahasa yang digunakan untuk mengakses data dalam basis rasional. sumber wikipedia

DATABASE

Pangkalan data (disebut juga basis data; bahasa Inggris: database) adalah kumpulan data yang terorganisir, yang umumnya disimpan dan diakses secara elektronik dari suatu sistem komputer. Pada saat pangkalan data menjadi semakin kompleks, maka pangkalan data dikembangkan menggunakan teknik perancangan dan pemodelan secara formal. sumber wikipedia

Membuat database di sql

create database nama_databasenya;


Menampilkan semua database

show databases;


Memanggil database

use nama_databasenya;


Membuat table

CREATE TABLE nama_tabel (
    kolom1 tipedata,
    kolom2 tipedata,
    kolom3 tipedata,
   ….
);


Melihat deskripsi tabel

DESCRIBE nama_tabel;


Insert data pada table

INSERT INTO table_name (kolom1, kolom2, kolom3, …)
VALUES (value1, value2, value3, …);


Menampilkan semua data pada table

SELECT * FROM nama_tabel;


Memanpilkan data pada table berdasarkan kolomnya

SELECT kolom1, kolom2, …
FROM table_name;


Mempilkan data dengan kondisi

SELECT *
FROM nama_tabel
WHERE condition;


Update data pada table

UPDATE nama_table
SET kolom1 = value1, kolom2 = value2, …
WHERE condition;


Hapus data pada table

DELETE FROM nama_table WHERE condition;
 

Review Sanbercode

cara menjalankan mariadb di xammp cd folder xampp/mysql/bin terus ketik di cmd/terminal mysql -uroot -p

Pengenalan SQL : https://youtu.be/HEZLczMfyq8 
Database, Table, dan Foreign Key SQL : https://youtu.be/Sz9kAbwosFE
Insert, Select, Like, dan Order SQL : https://youtu.be/CsAtNpxDQ2g 
Update & Delete SQL : https://youtu.be/7RNtBqKvynU 
Join & Alias SQL : https://youtu.be/QKY79DKA4g4 
SUM,MIN,MAX,AVG,COUNT SQL : https://youtu.be/yWns7y1Bbx4  -->