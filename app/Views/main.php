<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/save methods="post>
    <br>
    <label>Name</label>
    <br>
    <input type="text" name="Name">
    <br>
    <label>Address</label>
    <br>
    <input type="text" name="Address">
    <br>
    <label>Age</label>
    <br>
    <input type="text" name="Age">
    <input> type="submit" name="Program">
     <table border="1">
        <tr>
    <th>Name</th>
    <th>Address</th>
    <th>Age</th>
</tr>
<?php foreach ($ee as $ahh):?>
    
<tr>
<td><?=$ahh['Name']?></td>
<td><?=$ahh['Address']?></td>
<td><?=$ahh['Age']?></td>
</tr>
<?php endforeach;?>
    
     </table>
</body>
</html>