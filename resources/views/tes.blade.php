<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    nav {
      background-color: #333;
      overflow: hidden;
    }

    nav a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    nav a:hover {
      background-color: #ddd;
      color: black;
    }

    .active {
      background-color: #4CAF50;
      color: white;
    }

    .icon {
      width: 24px;
      height: 24px;
      margin-right: 8px;
    }
  </style>
</head>
<body>

<nav>
  <a href="#" class="active">
    <img src="icon1.svg" alt="Icon 1" class="icon">
    Home
  </a>
  <a href="#">
    <img src="icon2.svg" alt="Icon 2" class="icon">
    About
  </a>
  <a href="mobile">
    <img src="icon3.svg" alt="Icon 3" class="icon">
    Contact
  </a>
</nav>

</body>
</html>
