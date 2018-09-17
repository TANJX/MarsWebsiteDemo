<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Video Demo | Mars Inc.</title>
</head>

<body>


<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 2018/09/16
 * Time: 23:27
 */

$video = $_REQUEST['video'];

echo '<h1>' . $video . '</h1>';
echo '<video  controls>';
echo '<source src="/videos/' . $video . '.mp4" type="video/mp4">';
echo '</video>';
?>

</body>

</html>
<style>
  * {
    font-family: sans-serif;
  }

  body {
    padding-top: 100px;
    text-align: center;
  }

  video {
    display: block;
    margin: 50px auto 0;
    width: 1280px;
    height: 720px;
  }

  @media (max-width: 1310px) {
    video {
      width: 768px;
      height: 432px;
    }
  }

  @media (max-width: 800px) {
    video {
      width: 512px;
      height: 288px;
    }
  }

  @media (max-width: 550px) {
    video {
      width: 312px;
      height: 176px;
    }
  }

</style>


