<!-- resources/views/accidents/index.blade.php -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accidents Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h2>Accident Records</h2>
      <table class="table table-dark">
        <thead>
          <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Accident Type</th>
            <th>Additional Column 1</th>
            <th>Additional Column 2</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($accidents as $accident)
            <tr>
              <td>{{ $accident->name }}</td>
              <td>{{ $accident->farmername }}</td>
              <td>{{ $accident->predictprice }}</td>
              <td>{{ $accident->predictdate }}</td> <!-- Replace with the actual field name -->
              <td>{{ $accident->predictquantity }}</td> <!-- Replace with the actual field name -->
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
