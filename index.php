<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTMX Boilerplate</title>
    <!-- Include HTMX library -->
  <script src="https://unpkg.com/htmx.org@1.9.12"></script>
</head>
<body>
    <h1>HTMX Boilerplate</h1>

    <div id="content">
        <!-- Content will be dynamically loaded here -->
    </div>

    <!-- Example button to trigger HTMX request -->
    <button hx-get="api/psql_example.php" hx-target="#content">Load Content</button>
</body>
</html>

