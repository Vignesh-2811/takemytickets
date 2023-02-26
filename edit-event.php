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
                $event = getById("events", $id);

                if(mysqli_num_rows($event) > 0)
                {
                    $data = mysqli_fetch_array($event);
                    ?>
                     <div class="col-md-2">
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <b>Edit event details</b>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="functions/code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <b>Event details </b>
                        </div>
                        <div class="col-md-8">
                        <input type="hidden" name="event_id" value="<?= $data['id'] ?>">
                            <label for="" class = "mb-0">Event</label>
                            <input type = "text" name = "event" value="<?= $data['event'] ?>" placeholder = "Enter event name" class = "form-control" required>

                            <label for="" class = "mb-0">Artist</label>
                            <input type = "text" name = "artist" value="<?= $data['artist'] ?>" placeholder = "Enter artist name" class = "form-control" required>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class = "mb-0" >Type</label>
                                    <select name="type" id="type" class = "form-select mb-2">
                                        <option selected><?= $data['type'] ?></option>
                                        <option value="Music">Music</option>
                                        <option value="Theatre & Art">Theatre & Art</option>
                                        <option value="Comedy">Comedy</option>
                                        <option value="Performance">Performance</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class = "mb-0">Date</label>
                                   <input type="date" value="<?= $data['date'] ?>"placeholder = "date" class = "form-control" name = "date" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class = "mb-0">Time</label>
                                   <input type="time"  value="<?= $data['time'] ?>" placeholder = "time" class = "form-control" name = "time" required> 
                                </div>
                            </div>

                            <label for="" class = "mb-0">Poster</label>
                            <input type="hidden" name="old_image" value="<?= $data['image']; ?>">
                                    <input type="file" name="image" class="form-control mb-2">
                                    <label class="mb-0">Current Image</label>
                                    <img src="uploads/<?= $data['image'] ?>" alt="Product Image" height="50px" width="50px">
                            
                           <div>
                            <label for="" class = "mb-0">This is a trending event</label>
                            <input type="checkbox" <?= $data['trending'] == '0' ? '': 'checked' ?>  name = "trending">
                            </div>
                        </div>
                        
        </div>
                        <br><hr><br>
                        <div class="row">
                            <div class="col-md-4">
                                <b>Ticket Details</b>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                <div class="col-md-4">
                                <label for="">Category</label>
                                <input type="text" class = "form-control" value="<?= $data['category'] ?>" name = "category" required placeholder = "Enter category">
                                </div>
                                <div class="col-md-4">
                                <label for="">Price</label>
                                <input type="number" class = "form-control" name = "price" required value="<?= $data['price'] ?>" placeholder = "Enter price">
                                </div>
                                <div class="col-md-4">
                                <label for="">Details</label>
                                <textarea rows = "3" class = "form-control"  name = "details" required placeholder = "Enter details"> <?= $data['details'] ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <label for="">Category</label>
                                <input type="text" class = "form-control" name = "category2" value="<?= $data['category2'] ?>"required placeholder = "Enter category">
                                </div>
                                <div class="col-md-4">
                                <label for="">Price</label>
                                <input type="number" class = "form-control" name = "price2" required value="<?= $data['price2'] ?>" placeholder = "Enter price">
                                </div>
                                <div class="col-md-4">
                                <label for="">Details</label>
                                <textarea rows = "3" class = "form-control"  name = "details2" required placeholder = "Enter details"> <?= $data['details2'] ?></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <label for="">Category</label>
                                <input type="text" class = "form-control" name = "category3" value="<?= $data['category3'] ?>" required placeholder = "Enter category">
                                </div>
                                <div class="col-md-4">
                                <label for="">Price</label>
                                <input type="number" class = "form-control" name = "price3" required value="<?= $data['price3'] ?>" placeholder = "Enter price">
                                </div>
                                <div class="col-md-4">
                                <label for="">Details</label>
                                <textarea rows = "3" class = "form-control"  name = "details3" required placeholder = "Enter details"> <?= $data['details3'] ?></textarea>
                                </div>
                            </div>
                             
                            <label for="" class = "mb-0">Box office collection</label>
                            <input type="checkbox" <?= $data['boxoffice'] == '0' ? '': 'checked' ?>  name = "boxoffice">
                        </div>
    </div>
    <br><hr><br>
                        <div class="row">
                            <div class="col-md-4">
                                <b>Venue details</b>
                            </div>
                            <div class="col-md-8">
                                <label for="">Select Venue</label>
                                <select name="venue" class="form-select mb-2">
                                <option selected></option>
                                <?php
                                    $venues = getAll("venues");

                                    if(mysqli_num_rows($venues) > 0){
                                        foreach ($venues as $item) {
                                            ?>
                                            <option selected><?= $data['venue'] ?></option>
                                            <option value="<?= $item['venue']; ?>"><?= $item['venue'];?></option>
                                            <?php
                                        }
                                    }
                                else{
                                    echo "No venue available";
                                }
                                ?>
                                </select>
                                <label for="">Select City</label>
                                <select name="city" class="form-select mb-2">
                                <option value="<?= $item['city']; ?>"><?= $item['city'];?></option>
                                <?php
                                    $venues = getAll("venues");

                                    if(mysqli_num_rows($venues) > 0){
                                        foreach ($venues as $item) {
                                            ?>
                                            <option value="<?= $item['city']; ?>"><?= $item['city'];?></option>
                                            <?php
                                        }
                                    }
                                else{
                                    echo "No venue available";
                                }
                                ?>
                                </select>

                            </div>
                           

                            </div>
                            <br><br>
                            <div style="text-align:center;">
                                <button type="submit" class="btn btn-primary" name = "update_event_btn">Update</button>
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
