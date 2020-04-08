<?php
session_start();

if ($_SERVER['QUERY_STRING'] == 'noname') {
  unset($_SESSION['name']);
}
$name = $_SESSION['name'] ?? 'Guest';

?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Electricity Bill Calculator</title>
  <link rel="icon" href="img/electric.png" type="image/png" sizes="16x16">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
    .brand {
      background: #cbb09c !important;
    }

    .brand-text {
      color: #cbb09c !important;
    }
  </style>
</head>

<body class="grey lighten-4">
  <nav class="teal lighten-2 z-depth-0">
    <div class="container">
      <a href="calculate.php" class="brand-logo brand-text">EB.Calculator</a>
      <ul id="nav-mobile" class="right hide-on-small-and-down">
        <li class="black-text" >Hello <?php echo htmlspecialchars($name); ?> </li>
      </ul>
    </div>
  </nav>