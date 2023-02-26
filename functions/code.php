<?php
// error_reporting(E_ERROR | E_PARSE);
session_start();
include('../config/connection.php');
include('../functions/myfunctions.php');

// $path = 'uploads';

// if (!is_writable($path)) {
//     chmod($path, 0777);
// }


// print_r("hi");
if(isset($_POST['add_event_btn']))
{
    
    $event = $_POST['event'];
    $artist = $_POST['artist'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $details = $_POST['details'];
    $category2 = $_POST['category2'];
    $price2 = $_POST['price2'];
    $details2 = $_POST['details2'];
    $category3 = $_POST['category3'];
    $price3 = $_POST['price3'];
    $details3 = $_POST['details3'];
    $trending = isset($_POST['trending']) ? '1' : '0';
    $boxoffice = isset($_POST['boxoffice']) ? '1' : '0';
    $venue = $_POST['venue'];
    $city = $_POST['city'];

    $image = $_FILES['image']['name'];

    // $path = "/home/silver_surfer/Pictures/adminimages";
    $path = "../uploads";

    // $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $image_ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    $filename = time(). '.'. $image_ext;

    $event_query = "INSERT INTO events (event, artist, type, date, time, image, trending, category, price, details, category2, price2, details2, category3, price3, details3, boxoffice, venue, city)
    VALUES ('$event', '$artist', '$type', '$date', '$time', '$filename', '$trending', '$category', '$price', '$details', '$category2', '$price2', '$details2', '$category3', '$price3', '$details3', '$boxoffice', '$venue', '$city' )";

    $event_query_run = mysqli_query($conn, $event_query);
    if($event_query_run){
        move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$filename);
        redirect("../events.php", "Event added successfully");
    }
    else{
        redirect("addevent.php", "Something went wrong");
        
    }
}
else if(isset($_POST['update_event_btn']))
{
    $event_id = $_POST['event_id'];
    $event = $_POST['event'];
    $artist = $_POST['artist'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $details = $_POST['details'];
    $category2 = $_POST['category2'];
    $price2 = $_POST['price2'];
    $details2 = $_POST['details2'];
    $category3 = $_POST['category3'];
    $price3 = $_POST['price3'];
    $details3 = $_POST['details3'];
    $trending = isset($_POST['trending']) ? '1' : '0';
    $boxoffice = isset($_POST['boxoffice']) ? '1' : '0';
    $venue = $_POST['venue'];
    $city = $_POST['city'];

   
    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['old_image'];

    if($new_image != "")
    {
        $image_ext = pathinfo($new_image, PATHINFO_EXTENSION);
        $update_filename = time().'.'.$image_ext;
    }
    else
    {
        $update_filename = $old_image;
    }
    $path = "../uploads";

    $update_query = "UPDATE events SET event = '$event', artist = '$artist', type = '$type', date = '$date', time = '$time', category = '$category', price = '$price', details = '$details',
    category2 = '$category2', price2 = '$price2', details2 = '$details2', category3 = '$category3', price3 = '$price3', details3 = '$details3', trending = '$trending', boxoffice = '$boxoffice', venue = '$venue', city = '$city', image='$update_filename' WHERE id='$event_id' ";

    $update_query_run = mysqli_query($conn, $update_query);
    if($update_query_run){
        if($_FILES['image']['name'] != "")
        {
            move_uploaded_file($_FILES['image']['tmp_name'], $path.'/'.$update_filename);
            if(file_exists("../uploads/".$old_image))
            {
                unlink("../uploads/".$old_image);
            }
        }
        redirect("../edit-event.php?id=$event_id", "Event Updated Successfully");
    }
    else
    {
        redirect("../edit-event.php?id=$event_id", "Something Went Wrong");
    }

}
else if(isset($_POST['add_venue_btn']))
{
     
    $venue = $_POST['venue'];
    $address = $_POST['address'];
    $gmapurl = $_POST['gmapurl'];
    $city = $_POST['city'];

    $venue_query = "INSERT INTO venues (venue, address, gmapurl, city) VALUES('$venue', '$address', '$gmapurl', '$city')";

    $venue_query_run = mysqli_query($conn, $venue_query);

    if($venue_query_run){
        redirect("../addevent.php", "Venue added successfully");
    }
}
else if(isset($_POST['update_venue_btn']))
{
    $venue_id = $_POST['venue_id'];
    $venue = $_POST['venue'];
    $address = $_POST['address'];
    $gmapurl = $_POST['gmapurl'];
    $city = $_POST['city'];

    $update_event_query = "UPDATE venues SET venue = '$venue', address = '$address', gmapurl = '$gmapurl', city = '$city' WHERE id = '$venue_id'";


    $update_event_query_run = mysqli_query($conn, $update_event_query);
    if($update_event_query_run){
       
        redirect("../edit-venue.php?id=$venue_id", "Venue Updated Successfully");
    }
    else
    {
        redirect("../edit-venue.php?id=$venue_id", "Something Went Wrong");
    }

    

}