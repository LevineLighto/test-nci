<?php

$min = 1;
$max = 100;
$search = 9;

$occurence = 0;
$occurenceDetails = [];

for ($i = $min; $i <= $max; $i++) { 
    $numString  = strval($i);
    $count      = substr_count($numString, '9');

    if ($count) {
        $occurence += $count;
        $occurenceDetails[] = [
            'number'    => $i,
            'occurence' => $count
        ];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number <?= $search ?> occurence counter</title>
    <style>
        * {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .bold {
            font-weight: 700;
        }

        .text-center {
            text-align: center;
        }

        .text-end {
            text-align: end;
        }

        table {
            border-collapse: collapse;
        }

        table th, table td {
            padding: .5rem 1rem;
        }

        table thead tr {
            border-bottom: 2px solid #aac;
        }

        table tfoot tr {
            border-top: 2px solid #aac;
        }

        table tbody tr:nth-child(odd) {
            background-color: #f7f7ff;
        }

        table tbody tr:nth-child(even) {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <h2>Setup</h2>
    <p>
        <span class="bold">Min:</span>
        <?= $min ?>
    </p>
    <p>
        <span class="bold">Max:</span>
        <?= $max ?>
    </p>
    <p>
        <span class="bold">Searched number:</span>
        <?= $search ?>
    </p>
    <hr/>
    <h2>Result</h2>
    <p>
        <span class="bold">Occurence:</span>
        <?= $occurence ?>
    </p>
    <p>
        <span class="bold">Details:</span>
        <table>
            <thead>
                <tr>
                    <th scope="col">Number</th>
                    <th scope="col">Occurence</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($occurenceDetails as $detail):?>
                    <tr>
                        <th class="text-center"><?= $detail['number'] ?></th>
                        <td class="text-end"><?= $detail['occurence'] ?></td>
                    </tr>
                <?php endforeach;?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="text-center">Total</th>
                    <th class="text-end"><?= $occurence ?></th>
                </tr>
            </tfoot>
        </table>
    </p>
</body>
</html>