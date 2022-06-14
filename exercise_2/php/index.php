<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="vieport" content="width=device=width, initial-scale=1.0">
    <title>PHP Practice</title>
    <link rel="stylesheet" type="text/css" href="../../site_exercise_2/css/style.css"/>
</head>

<body>

  <div class="header">
      <?php include 'main.data.php' ?>
  </div>

  <h1>Таблица гибкой истинности PHP</h1>

  <table>
    <colgroup>
        <col span="1" style= "background-color: #eee; font-weight: bold">
    </colgroup>
    <tr>
        <th><strong>==</strong></th>
        <th><strong>true</strong></th>
        <th><strong>false</strong></th>
        <th><strong>1</strong></th>
        <th><strong>0</strong></th>
        <th><strong>-1</strong></th>
        <th><strong>"1"</strong></th>
        <th><strong>null</strong></th>
        <th><strong>"php"</strong></th>
    </tr>
    <tr>
        <td><strong>true</strong></td>
        <td><?php echo $result[0][0] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][2] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][4] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][6] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][8] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][10] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][12] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][14] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>false</strong></td>
        <td><?php echo $result[1][0] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][2] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][4] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][6] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][8] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][10] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][12] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][14] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>1</strong></td>
        <td><?php echo $result[2][0] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][2] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][4] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][6] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][8] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][10] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][12] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][14] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>0</strong></td>
        <td><?php echo $result[3][0] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][2] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][4] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][6] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][8] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][10] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][12] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][14] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>-1</strong></td>
        <td><?php echo $result[4][0] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][2] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][4] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][6] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][8] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][10] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][12] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][14] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>"1"</strong></td>
        <td><?php echo $result[5][0] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][2] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][4] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][6] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][8] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][10] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][12] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][14] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>null</strong></td>
        <td><?php echo $result[6][0] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][2] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][4] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][6] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][8] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][10] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][12] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][14] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>"php"</strong></td>
        <td><?php echo $result[7][0] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][2] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][4] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][6] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][8] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][10] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][12] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][14] ? 'true' : 'false' ?></td>
    </tr>
  </table> 

  <br>
  <br>
  <h1>Таблица жестокой истинности PHP</h1>

  <table>
    <colgroup>
        <col span="1" style= "background-color: #eee; font-weight: bold">
    </colgroup>
    <tr>
        <th><strong>===</strong></th>
        <th><strong>true</strong></th>
        <th><strong>false</strong></th>
        <th><strong>1</strong></th>
        <th><strong>0</strong></th>
        <th><strong>-1</strong></th>
        <th><strong>"1"</strong></th>
        <th><strong>null</strong></th>
        <th><strong>"php"</strong></th>
    </tr>
    <tr>
        <td><strong>true</strong></td>
        <td><?php echo $result[0][1] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][3] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][5] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][7] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][9] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][11] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][13] ? 'true' : 'false' ?></td>
        <td><?php echo $result[0][15] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>false</strong></td>
        <td><?php echo $result[1][1] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][3] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][5] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][7] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][9] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][11] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][13] ? 'true' : 'false' ?></td>
        <td><?php echo $result[1][15] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>1</strong></td>
        <td><?php echo $result[2][1] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][3] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][5] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][7] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][9] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][11] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][13] ? 'true' : 'false' ?></td>
        <td><?php echo $result[2][15] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>0</strong></td>
        <td><?php echo $result[3][1] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][3] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][5] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][7] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][9] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][11] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][13] ? 'true' : 'false' ?></td>
        <td><?php echo $result[3][15] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>-1</strong></td>
        <td><?php echo $result[4][1] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][3] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][5] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][7] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][9] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][11] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][13] ? 'true' : 'false' ?></td>
        <td><?php echo $result[4][15] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>"1"</strong></td>
        <td><?php echo $result[5][1] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][3] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][5] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][7] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][9] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][11] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][13] ? 'true' : 'false' ?></td>
        <td><?php echo $result[5][15] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>null</strong></td>
        <td><?php echo $result[6][1] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][3] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][5] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][7] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][9] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][11] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][13] ? 'true' : 'false' ?></td>
        <td><?php echo $result[6][15] ? 'true' : 'false' ?></td>
    </tr>
    <tr>
        <td><strong>"php"</strong></td>
        <td><?php echo $result[7][1] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][3] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][5] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][7] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][9] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][11] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][13] ? 'true' : 'false' ?></td>
        <td><?php echo $result[7][15] ? 'true' : 'false' ?></td>
    </tr>
  </table>

</body>