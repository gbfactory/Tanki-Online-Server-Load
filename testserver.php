<?php
$json_string = 'https://test.tankionline.com/public_test';
$jsondata = file_get_contents($json_string);
$obj = json_decode($jsondata,true);
$deploy1 = $obj[0]['UserCount'];
$deploy3 = $obj[1]['UserCount'];
$deploy4 = $obj[2]['UserCount'];
$deploy5 = $obj[3]['UserCount'];
$total = $deploy1 + $deploy3 + $deploy4 + $deploy5;
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tanki Server Load</title>
  </head>
  <body>
    <h1>Tanki Servers Load</h1>
    <table border="1">
      <tr>
        <td><a href="./index.php">Main Server Load</a></td>
        <td><a href="./testserver.php">Test Server Load</a></td>
      </tr>
    </table>
    <h4>Total Online: <?php echo $total; ?> </h4>
    <table border="1">
      <tr>
        <th>Server</th>
        <th>Release</th>
        <th>UserCount</th>
        <th>Url</th>
      </tr>
      <tr>
        <td>1</td>
        <td><?php echo $obj[0]['Release']; ?></td>
        <td><?php echo $obj[0]['UserCount']; ?></td>
        <td><a href="<?php echo $obj[0]['Url']; ?>"><?php echo $obj[0]['Domain']; ?></a></td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo $obj[1]['Release']; ?></td>
        <td><?php echo $obj[1]['UserCount']; ?></td>
        <td><a href="<?php echo $obj[1]['Url']; ?>"><?php echo $obj[1]['Domain']; ?></a></td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo $obj[2]['Release']; ?></td>
        <td><?php echo $obj[2]['UserCount']; ?></td>
        <td><a href="<?php echo $obj[2]['Url']; ?>"><?php echo $obj[2]['Domain']; ?></a></td>
      </tr>
      <tr>
        <td>4</td>
        <td><?php echo $obj[3]['Release']; ?></td>
        <td><?php echo $obj[3]['UserCount']; ?></td>
        <td><a href="<?php echo $obj[3]['Url']; ?>"><?php echo $obj[3]['Domain']; ?></a></td>
      </tr>
    </table>
    <br>
    <a href="http://en.tankiforum.com/index.php?showtopic=378782">Topic on Tanki Forum</a>
    <p>This page is automatically reloading after 10 seconds.</p>
    <p>2018 - Made by GB Factory [GB003].</p>
  </body>
</html>
