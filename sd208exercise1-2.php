<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <table>
        <?php for ($i = 0; $i < 8; $i++) { ?>
            <tr> <?php for ($j = 0; $j < 8; $j++) { ?>
                    <td <?php
                        if ($i % 2 == 0) {
                            if ($j % 2 == 0) {
                                echo 'class="black"';
                            }
                        } else {
                            if ($j % 2 != 0) {
                                echo 'class="black"';
                            }
                        }
                        ?>> </td>
                <?php } ?> </tr>
        <?php } ?>
    </table>
</body>

</html>