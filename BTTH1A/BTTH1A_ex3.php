<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <?php

    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];


    ?>
    <table>
        <tr>
            <th>Tên khóa học</th>
        </tr>
        <tr>
            <td><?php echo $arrs[0]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrs[1]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrs[2]; ?></td>
        </tr>
        <tr>
            <td><?php echo $arrs[3]; ?></td>
        </tr>
    </table>
</body>

</html>