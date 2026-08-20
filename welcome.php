<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
      background: #fafafa;
      color: #111;
      -webkit-font-smoothing: antialiased;
    }

    .container {
      text-align: center;
      padding: 2rem;
    }

    h1 {
      font-size: clamp(2.5rem, 8vw, 4.5rem);
      font-weight: 300;
      letter-spacing: -0.02em;
      margin-bottom: 0.75rem;
      line-height: 1.1;
    }

    p {
      font-size: clamp(1rem, 2.5vw, 1.25rem);
      font-weight: 400;
      color: #666;
      letter-spacing: 0.01em;
      max-width: 28rem;
      margin: 0 auto;
      line-height: 1.6;
    }

    .line {
      width: 40px;
      height: 1px;
      background: #111;
      margin: 1.5rem auto;
      opacity: 0.4;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>WELCOME</h1>
    <div class="line"></div>
    <p><?php echo $_SESSION['name']; ?></p>
  </div>
</body>
</html>