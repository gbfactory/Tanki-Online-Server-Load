<?php
session_start();
$opts = array(
  'http'=>array(
    'method'=>"GET",
  )
);
$context = stream_context_create($opts);
$file = file_get_contents('https://tankionline.com/s/status.js', false, $context);
$json = json_decode($file, true);

$online = $json['nodes']['main.c1']['online'] + $json['nodes']['main.c2']['online'] + $json['nodes']['main.c3']['online'] + $json['nodes']['main.c4']['online'] + $json['nodes']['main.c5']['online'] + $json['nodes']['main.c6']['online'] + $json['nodes']['main.c7']['online'] + $json['nodes']['main.c8']['online'] + $json['nodes']['main.c9']['online'] + $json['nodes']['main.c10']['online'] + $json['nodes']['main.c11']['online'] + $json['nodes']['main.c12']['online'] + $json['nodes']['main.c13']['online'] + $json['nodes']['main.c14']['online'] + $json['nodes']['main.c15']['online'] + $json['nodes']['main.c16']['online'] + $json['nodes']['main.c17']['online'] + $json['nodes']['main.c18']['online'] + $json['nodes']['main.c19']['online'];

$inbattles = $json['nodes']['main.c1']['inbattles'] + $json['nodes']['main.c2']['inbattles'] + $json['nodes']['main.c3']['inbattles'] + $json['nodes']['main.c4']['inbattles'] + $json['nodes']['main.c5']['inbattles'] + $json['nodes']['main.c6']['inbattles'] + $json['nodes']['main.c7']['inbattles'] + $json['nodes']['main.c8']['inbattles'] + $json['nodes']['main.c9']['inbattles'] + $json['nodes']['main.c10']['inbattles'] + $json['nodes']['main.c11']['inbattles'] + $json['nodes']['main.c12']['inbattles'] + $json['nodes']['main.c13']['inbattles'] + $json['nodes']['main.c14']['inbattles'] + $json['nodes']['main.c15']['inbattles'] + $json['nodes']['main.c16']['inbattles'] + $json['nodes']['main.c17']['inbattles'] + $json['nodes']['main.c18']['inbattles'] + $json['nodes']['main.c19']['inbattles'];

$idle = $online - $inbattles;
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tanki Server Load</title>
    <script type="text/javascript">
      setTimeout(function(){
         window.location.reload(1);
      }, 10000);
    </script>
  </head>
  <body>
    <h1>Tanki Servers Load</h1>
    <table border="1">
      <tr>
        <td><a href="./index.php">Main Server Load</a></td>
        <td><a href="./testserver.php">Test Server Load</a></td>
      </tr>
    </table>
    <h4>Total Online: <?php echo $online; ?> </h4>
    <h4>Total In Battles: <?php echo $inbattles; ?> </h4>
    <h4>Total Idle: <?php echo $idle; ?> </h4>
    <table border="1">
      <tr>
        <th>Server</th>
        <th>Online</th>
        <th>In Battle</th>
        <th>Idle</th>
      </tr>
      <tr>
        <td>1</td>
        <td><?php echo $json['nodes']['main.c1']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c1']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c1']['online'] - $json['nodes']['main.c1']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>2</td>
        <td><?php echo $json['nodes']['main.c2']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c2']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c2']['online'] - $json['nodes']['main.c2']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>3</td>
        <td><?php echo $json['nodes']['main.c3']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c3']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c3']['online'] - $json['nodes']['main.c3']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>4</td>
        <td><?php echo $json['nodes']['main.c4']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c4']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c4']['online'] - $json['nodes']['main.c4']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>5</td>
        <td><?php echo $json['nodes']['main.c5']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c5']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c5']['online'] - $json['nodes']['main.c5']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>6</td>
        <td><?php echo $json['nodes']['main.c6']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c6']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c6']['online'] - $json['nodes']['main.c6']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>7</td>
        <td><?php echo $json['nodes']['main.c7']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c7']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c7']['online'] - $json['nodes']['main.c7']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>8</td>
        <td><?php echo $json['nodes']['main.c8']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c8']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c8']['online'] - $json['nodes']['main.c8']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>9</td>
        <td><?php echo $json['nodes']['main.c9']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c9']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c9']['online'] - $json['nodes']['main.c9']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>10</td>
        <td><?php echo $json['nodes']['main.c10']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c10']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c10']['online'] - $json['nodes']['main.c10']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>11</td>
        <td><?php echo $json['nodes']['main.c11']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c11']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c11']['online'] - $json['nodes']['main.c11']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>12</td>
        <td><?php echo $json['nodes']['main.c12']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c12']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c12']['online'] - $json['nodes']['main.c12']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>13</td>
        <td><?php echo $json['nodes']['main.c13']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c13']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c13']['online'] - $json['nodes']['main.c13']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>14</td>
        <td><?php echo $json['nodes']['main.c14']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c14']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c14']['online'] - $json['nodes']['main.c14']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>15</td>
        <td><?php echo $json['nodes']['main.c15']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c15']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c15']['online'] - $json['nodes']['main.c15']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>16</td>
        <td><?php echo $json['nodes']['main.c16']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c16']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c16']['online'] - $json['nodes']['main.c16']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>17</td>
        <td><?php echo $json['nodes']['main.c17']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c17']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c17']['online'] - $json['nodes']['main.c17']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>18</td>
        <td><?php echo $json['nodes']['main.c18']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c18']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c18']['online'] - $json['nodes']['main.c18']['inbattles']; ?></td>
      </tr>
      <tr>
        <td>19</td>
        <td><?php echo $json['nodes']['main.c19']['online']; ?></td>
        <td><?php echo $json['nodes']['main.c19']['inbattles']; ?></td>
        <td><?php echo $json['nodes']['main.c19']['online'] - $json['nodes']['main.c19']['inbattles']; ?></td>
      </tr>
    </table>
    <br>
    <a href="http://en.tankiforum.com/index.php?showtopic=378782">Topic on Tanki Forum</a>
    <p>This page is automatically reloading after 10 seconds.</p>
    <p>2018 - Made by GB Factory [GB003].</p>
  </body>
</html>
