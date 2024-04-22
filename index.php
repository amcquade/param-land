<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>paramstore-local</title>

  <link rel="icon" type="image/x-icon" href="/images/icons8-gear-ios-17-outlined-32.png">

  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Include HTMX library -->
  <script src="https://unpkg.com/htmx.org@1.9.12"></script>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background: linear-gradient(120deg, #84fab0, #8fd3f4);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .content {
      text-align: center;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="content">
      <h1>ParamLand</h1>
      <p>This is a simple example of using Bootstrap and htmx together.</p>
      <button class="btn btn-primary" hx-get="/api/psql_example.php" hx-trigger="click" hx-target="#dataContainer">Load Data</button>
      <div id="dataContainer" class="container"></div>
    </div>
  </div>
</body>

</html>