SELECT
    *
FROM
    propinsi
WHERE
    jumlah_penduduk > 10000000
AND
    nama_prop LIKE "Jawa%";
