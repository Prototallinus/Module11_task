<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device=width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" type="text/css" href="../../site_exercise_1/css/style.css"/>
</head>

<body>

  <div class="header">
      <?php include 'main.data.php' ?>
  </div>

  <h1>Таблица истинности PHP</h1>

  <table>
    <tr>
      <th><strong>A</strong></th>
      <th><strong>B</strong></th>
      <th><strong>!A</strong></th>
      <th><strong>A || B</strong></th>
      <th><strong>A && B</strong></th>
      <th><strong>A xor B</strong></th>
    </tr>
    <tr>
      <td><?php echo $a[0] ?></td>
      <td><?php echo $b[0] ?></td>
      <td><?php echo $not_a[0] ?></td>
      <td><?php echo $a_or_b[0] ?></td>
      <td><?php echo $a_and_b[0] ?></td>
      <td><?php echo $a_xor_b[0] ?></td>
    </tr>
    <tr>
      <td><?php echo $a[1] ?></td>
      <td><?php echo $b[1] ?></td>
      <td><?php echo $not_a[1] ?></td>
      <td><?php echo $a_or_b[1] ?></td>
      <td><?php echo $a_and_b[1] ?></td>
      <td><?php echo $a_xor_b[1] ?></td>
    </tr>
    <tr>
      <td><?php echo $a[2] ?></td>
      <td><?php echo $b[2] ?></td>
      <td><?php echo $not_a[2] ?></td>
      <td><?php echo $a_or_b[2] ?></td>
      <td><?php echo $a_and_b[2] ?></td>
      <td><?php echo $a_xor_b[2] ?></td>
    </tr>
    <tr>
      <td><?php echo $a[3] ?></td>
      <td><?php echo $b[3] ?></td>
      <td><?php echo $not_a[3] ?></td>
      <td><?php echo $a_or_b[3] ?></td>
      <td><?php echo $a_and_b[3] ?></td>
      <td><?php echo $a_xor_b[3] ?></td>
    </tr>
  </table> 


</body>
