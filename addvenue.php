<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Venue</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
    .form-control{
      border: 1px solid #B3A1A1 !important;
      padding: 6px 10px;
    }
    .form-select{
      border: 1px solid #B3A1A1 !important;
      padding: 6px 10px;

    }

  </style>
 
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Add a venue
            </div>
            <div class="card-body">
            <form action="functions/code.php" method="POST">
            <div>
            <label for="" class = "">Venue</label>
            <input type="text" placeholder = "Venue" class = "form-control" name = "venue">
            </div>
            <div>
            <label for="" class = "">Address</label>
            <textarea type="text" placeholder = "Address" class = "form-control" name = "address"></textarea>
            </div>
            <div>
            <label for="" class = "">Google Map URL</label>
            <input type="text" placeholder = "Google Map URL" class = "form-control" name = "gmapurl">
            </div>
            <div>
            <label for="" class = "">City</label>
            <input type="text" placeholder = "City" class = "form-control" name = "city">
            </div>
            <br>
            <div style="text-align:center;">
                                <button type="submit" class="btn btn-primary" name = "add_venue_btn" onclick-"closePopup()">Add venue</button>
                            </div>
            </form>
        </div>
    </div>
    </div>
    
</body>
</html>