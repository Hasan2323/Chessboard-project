<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chessboard</title>
</head>
<body bgcolor="gray">

<table align="center">

    <?
    for ($i=1; $i<=8; $i++) :

        if ($i%2==1){

        ?>

            <tr>
                <? for ($j=0; $j<8/2; $j++) : ?>
                    <td style="background-color: white; height: 60px; width: 60px;"></td>
                    <td style="background-color: black; height: 60px; width: 60px;"></td>
                 <? endfor; ?>
            </tr>

        <? } else { ?>
            <tr>
                <? for ($j=0; $j<8/2; $j++) : ?>
                    <td style="background-color: black; height: 60px; width: 60px;"></td>
                    <td style="background-color: white; height: 60px; width: 60px;"></td>
                <? endfor; ?>
            </tr>
        <? } ?>

    <? endfor; ?>

</table>

</body>
</html>