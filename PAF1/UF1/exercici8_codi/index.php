<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'AGENDA');
$data = $conn->query('SELECT * FROM DIRECCIONS');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Agenda</title>
  </head>
  <body>
    <h1>Agenda - Direccions</h1>
    <table>
      <thead>
        <tr>
          <th>Nom</th>
          <th>Primer cognom</th>
          <th>Segon cognom</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = $data->fetch_assoc()) { ?>
          <tr>
            <td><?=$row['Nom'];?></td>
            <td><?=$row['Cognom1'];?></td>
            <td><?=$row['Cognom2'];?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </body>
</html>
