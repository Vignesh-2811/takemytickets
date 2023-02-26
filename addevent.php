<?php
include "includes/header.php";
include "includes/aside.php";
?>

<!-- <script>
     function addInput() {
  var newInputFields = document.createElement("div");
  newInputFields.classList.add("col-md-4");
  newInputFields.innerHTML = "<label>Category</label><input type="text" class = "form-control" name = "category2" required placeholder = "Enter category"></div><div class="col-md-4"><label for="">Number</label><input type="number" class = "form-control" name = "price2" required placeholder = "Enter price"></div><div class="col-md-4"><label for="">Details</label><textarea rows = "3" class = "form-control"  name = "details2" required placeholder = "Enter details"></textarea>";
  document.getElementById("inputFields").appendChild(newInputFields);
     }
  </script> -->
<div class="container">
    <br><br><br>
    <div class="row">
        <div class="col-md-12">
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4>
                        <b>Enter the details</b>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="functions/code.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-4">
                            <b>Event details </b>
                        </div>
                        <div class="col-md-8">
                            <label for="" class = "mb-0">Event</label>
                            <input type = "text" name = "event" placeholder = "Enter event name" class = "form-control" required>

                            <label for="" class = "mb-0">Artist</label>
                            <input type = "text" name = "artist" placeholder = "Enter artist name" class = "form-control" required>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="" class = "mb-0" >Type</label>
                                    <select name="type" id="type" class = "form-select mb-2">
                                        <option value="Music">Music</option>
                                        <option value="Theatre & Art">Theatre & Art</option>
                                        <option value="Comedy">Comedy</option>
                                        <option value="Performance">Performance</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class = "mb-0">Date</label>
                                   <input type="date" placeholder = "date" class = "form-control" name = "date" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="" class = "mb-0">Time</label>
                                   <input type="time" placeholder = "time" class = "form-control" name = "time" required> 
                                </div>
                            </div>

                            <label for="" class = "mb-0">Poster</label>
                            <input type="file" name = "image" required class = "form-control mb-2" required>
                            
                           
                            <label for="" class = "mb-0">This is a trending event</label>
                            <input type="checkbox" name = "trending">
                            
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
                                <input type="text" class = "form-control" name = "category" required placeholder = "Enter category" required>
                                </div>
                                <div class="col-md-4">
                                <label for="">Price</label>
                                <input type="number" class = "form-control" name = "price" required placeholder = "Enter price" required>
                                </div>
                                <div class="col-md-4">
                                <label for="">Details</label>
                                <textarea rows = "3" class = "form-control"  name = "details" required placeholder = "Enter details" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <label for="">Category</label>
                                <input type="text" class = "form-control" name = "category2" required placeholder = "Enter category" required>
                                </div>
                                <div class="col-md-4">
                                <label for="">Price</label>
                                <input type="number" class = "form-control" name = "price2" required placeholder = "Enter price" required>
                                </div>
                                <div class="col-md-4">
                                <label for="">Details</label>
                                <textarea rows = "3" class = "form-control"  name = "details2" required placeholder = "Enter details" required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                <label for="">Category</label>
                                <input type="text" class = "form-control" name = "category3" required placeholder = "Enter category" required>
                                </div>
                                <div class="col-md-4">
                                <label for="">Price</label>
                                <input type="number" class = "form-control" name = "price3" required placeholder = "Enter price" required>
                                </div>
                                <div class="col-md-4">
                                <label for="">Details</label>
                                <textarea rows = "3" class = "form-control"  name = "details3" required placeholder = "Enter details" required></textarea>
                                </div>
                            </div>

                            
                             
                            <label for="" class = "mb-0">Box office collection</label>
                            <input type="checkbox" name = "boxoffice">
                        </div>
    </div>
    <br><hr><br>
                        <div class="row">
                            <div class="col-md-4">
                                <div>
                                <b>Venue details</b>
                                </div>
                                <div>
                                    <br><br>
                                    <button type = "button" class = "btn btn-dark" onclick = "openpopup()">Add new venue</button>
                                    
                                </div>
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
                                <option selected></option>
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
                                <!-- <option value=""><a href="add-venue.php">Add Venue</a></option> -->
                                </select>

                            </div>
                           

                            </div>
                            <br><br>
                            <div style="text-align:center;">
                                <button type="submit" class="btn btn-primary" name = "add_event_btn">Save</button>
                            </div>

                        </form>
                        
                    </div>
                </div>
            </div>
    </div>


<?php
include "includes/footer.php";
?>


                            <!-- <button type = "button" onclick="addInput()">Add a category</button> -->
