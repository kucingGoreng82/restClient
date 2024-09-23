<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Asisten</title>
</head>
<body>
    <h2>Data Asisten</h2>
    <table border="1">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Praktikum</th>
                <th>IPK</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($asisten) && is_array($asisten)): ?>
                <?php foreach ($asisten as $row): ?>
                    <tr>
                        <td><?php echo $row->NIM; ?></td>
                        <td><?php echo $row->NAMA; ?></td>
                        <td><?php echo $row->PRAKTIKUM; ?></td>
                        <td><?php echo $row->IPK; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No data available.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>