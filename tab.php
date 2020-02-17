<?php
$donneesPerso=array(
    "name"=> "sellaouti",
    "firstname" => "aymen",
    "age" => "37"

);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<tr>
<table border='2'>
<th> title </th>
<th> infos </th>
</tr>
<?php
var_dump($donneesPerso);
foreach($donneesPerso as $cle=>$contenu){
    ?>
    <tr>
    <td><?=$cle ?> </td>
    <td><?=$contenu ?> </td>
    
    </tr>
    <?php
}
?>
</table>
</body>
</html>


