SELECT
    *
FROM
    ktp
JOIN
    propinsi
ON
    ktp.id_prop = propinsi.id_prop;
