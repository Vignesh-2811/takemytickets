<?php
include "includes/header.php";
include "includes/aside.php";
?>

<div class="container">
    <br><br><br>
    <div class="row">
        <div class="col-md-12">
        </div>

            <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $venue = getById("venues", $id);

                if(mysqli_num_rows($venue) > 0)
                {
                    $data = mysqli_fetch_array($venue);
                    ?>
                     <div class="col-md-2">
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <b>Edit venue details</b>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="functions/code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <b>Venue details </b>
                        </div>
                        <div class="col-md-8">
                        <input type="hidden" name="venue_id" value="<?= $data['id'] ?>">
                            <label for="" class = "mb-0">Venue</label>
                            <input type = "text" name = "venue" value="<?= $data['venue'] ?>" placeholder = "Enter venue name" class = "form-control" required>

                            <label for="" class = "mb-0">Address</label>
                            <textarea type = "text" name = "address"  placeholder = "Enter venue address" class = "form-control" required><?= $data['address'] ?></textarea>

                            <label for="" class = "mb-0">Google Map url</label>
                            <input type = "text" name = "gmapurl" value="<?= $data['gmapurl'] ?>" placeholder = "Enter googlemap url" class = "form-control" required>

                            <label for="" class = "mb-0">City</label>
                            <input type = "text" name = "city" value="<?= $data['city'] ?>" placeholder = "Enter city" class = "form-control" required>

                        </div>
                        
        </div>
                     
                            <br><br>
                            <div style="text-align:center;">
                                <button type="submit" class="btn btn-primary" name = "update_venue_btn">Update</button>
                            </div>

                        </form>
                        
                    </div>
                </div>
         <?php           
            }
            else{
                echo "Category not found";
            }
        }
        else{
            echo "ID missing from url";
        }
            ?>
       
            </div>
    </div>


<?php
include "includes/footer.php";
?>