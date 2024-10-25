<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Information Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('build/assets/css/registerform.css') }}">
</head>
<body>

<div class="container col-lg-6 col-md-8 col-sm-12 mx-auto">
    <h2 class="text-center">Product Add</h2>

    <form method="POST" action="{{ route('form.submit') }}">
        @csrf
        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Carrot" required>
        </div>

        <!-- Farmer Name -->
        <div class="mb-3">
            <label for="farmername" class="form-label">Farmer Name</label>
            <input type="text" name="farmername" class="form-control" id="farmername" placeholder="John Smith" required>
        </div>

        <!-- Predict Price -->
        <div class="mb-3">
            <label for="predictprice" class="form-label">Predict Price</label>
            <input type="text" name="predictprice" class="form-control" id="predictprice" placeholder="Rs.340.00" required>
        </div>

        <!-- Predict Date -->
        <div class="mb-3">
            <label for="predictdate" class="form-label">Predict Date</label>
            <input type="date" name="predictdate" class="form-control" id="predictdate" required>
        </div>

        <!-- Predict Quantity -->
        <div class="mb-3">
            <label for="predictquantity" class="form-label">Predict Quantity</label>
            <input type="text" name="predictquantity" class="form-control" id="predictquantity" placeholder="2.5 Kg" required>
        </div>

        <!-- Buttons (Reset and Register) -->
        <div class="d-flex justify-content-between">
            <button type="reset" class="btn btn-secondary">Reset</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
