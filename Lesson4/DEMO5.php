<?php
//switch case statement

$daysofweek = 'Tuesday';

switch($daysofweek)
{
    case 'Monday':
        $message = 'Monday blues';
        $color = 'blue';
        break;
    case 'Tuesday':
        $message = 'Taco Tuesday';
        $color = 'orange';
        break;
    case 'Wednesday':
        $message = 'Wednesday Laba day';
        $color = 'Pink';
        break;
    case 'Thursday':
        $message = 'Busy Day';
        $color = 'White';
        break;
    case 'Friday':
        $message = 'TGIF';
        $color = 'Red';
        break;
    case 'Saturday':
        $message = 'WeekEnd';
        $color = 'purple';
        break;
    default:
        $message = 'Holiday';
        $color = 'black';
        break;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: blue;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <h1><php strtoupper$$daysofweek ?></h1>
</body>

</html>