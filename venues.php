<?php
include "includes/header.php";
include "includes/aside.php";
?>

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
                        Venues
                    </h4>
                   
                </div>
                <div class="card-body">
                    
                    <div class="table-responsive">
                        <table id = "events_data" class = "table table-hover">
                            <thead class = "thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Venue</th>
                                    <th>Address</th>
                                    <th>Google Map URL</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $venue = getAll("venues");
                                if(mysqli_num_rows($venue) > 0) {
                                    foreach($venue as $item){
                                        ?>
                                        <tr>
                                            <td> <?= $item['id']; ?></td>
                                    <td><?= $item['venue']; ?></td>
                                    <td><?= $item['address']; ?></td>
                                    <td><?= $item['gmapurl']; ?></td>
                                    <td><?= $item['city']; ?></td>
                                    <td><a href="edit-venue.php?id=<?= $item['id']; ?>" class="btn btn-primary">Edit</a></td>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No records found";
                                }
                                ?>
                               
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>