CREATE TABLE propinsi ( 
    id_prop int(11) AUTO_INCREMENT, 
    nama_prop varchar(30), 
    jumlah_penduduk int, 
    PRIMARY KEY(id_prop) 
);

INSERT INTO propinsi 
    (nama_prop, jumlah_penduduk)
VALUES 
    ('Aceh',5274871),
    ('Sumatera Utara',14799361),
    ('Sumatera Barat', 5534472), 
    ('Riau', 6394087), 
    ('Jambi', 3548228), 
    ('Sumatera Selatan', 8467432), 
    ('Bengkulu', 2010670), 
    ('Lampung', 9007848), 
    ('Kepulauan Bangka Belitung', 1455678), 
    ('Kepulauan Riau', 2064564), 
    ('DKI Jakarta', 10562088), 
    ('Jawa Barat', 48274162), 
    ('Jawa Tengah', 36516035), 
    ('DI Yogyakarta', 3668719), 
    ('Jawa Timur', 40665696), 
    ('Banten', 11904562), 
    ('Bali', 4317404), 
    ('SMDNG',705), 
    ('Nusa Tenggara Barat', 5320092), 
    ('Nusa Tenggara Timur', 5325566), 
    ('Kalimantan Barat', 5414390), 
    ('Kalimantan Tengah', 2669969), 
    ('Kalimantan Selatan', 4073584), 
    ('Kalimantan Timur', 3766039), 
    ('Kalimantan Utara', 701814), 
    ('Sulawesi Utara', 2621923), 
    ('Sulawesi Tengah', 2985734),
    ('Sulawesi Selatan', 9073509), 
    ('Sulawesi Tenggara', 2624875), 
    ('Gorontalo', 1171681), 
    ('Sulawesi Barat', 1419229), 
    ('Maluku', 1848923), 
    ('Maluku Utara', 1282937), 
    ('Papua Barat', 1134068), 
    ('Papua', 4303707);

CREATE TABLE ktp( 
    id int(11) AUTO_INCREMENT, 
    Id_prop int(11), 
    nik varchar(16), 
    nama varchar(30), 
    PRIMARY KEY(id) 
);

INSERT INTO ktp 
    (Id_prop,nik,nama) 
VALUES 
    (12, '1234567890123456', 'Claravel'), 
    (3, '2345678901234567', 'Rara JS'), 
    (1, '3456789012345678', 'Abdul'), 
    (13, '4567890123456789', 'Jeson'), 
    (24, '56789012345678901', 'Pipiton');

SELECT * FROM propinsi;
