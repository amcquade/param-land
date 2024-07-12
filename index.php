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
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <div class="container">
    <div class="content">
      <h1>ParamLand</h1>

      <div class="container-sm mb-2">
        <form class="row g-3 align-items-center mb-3">
          <div class="col-md-2">
            <label for="param_query" class="form-label">Query</label>
          </div>

          <div class="col-md-8">
            <input name="q" type="text" class="form-control" id="param_query">
          </div>

          <div class="col-md-2">
            <button type="submit" hx-post="api/get_param.php" hx-target='#query-result' class="btn btn-primary">Search</button>
          </div>
        </form>
        <div id="query-result" class="container"></div>
      </div>

      <!-- TODO: match top section -->
      <div class="container-sm">
        <form class="row g-3">
          <div class="mb-3">
            <label for="param_query" class="form-label">Path</label>
            <input name="path" type="text" class="form-control" id="param_query">
          </div>
          <div class="mb-3">
            <label for="param_value" class="form-label">Value</label>
            <input name="value" type="text" class="form-control" id="param_value">
          </div>
          <div class="col-auto">
            <button type="submit" hx-post="api/add_param.php" hx-target='#add-result' class="btn btn-primary mb-3">Add</button>
          </div>
          <div id="add-result" class="container"></div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>