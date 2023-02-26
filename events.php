<?php
// include "middleware/admin_middleware.php";

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
                <div class="row">
                    <div class="col-md-8">
                <div class="card-header">
                    <h4>
                        Events
                       
                    </h4>

                </div>
                

                <div class="col-md-4">
                </div>
                </div>
                </div>
                <div class="card-body">
                <div style="text-align:right;">
                <a href="addevent.php" class="btn btn-dark"> +  Add event</a>
</div>
<br>
                    <div class="table-responsive">
                        <table id = "events_data" class = "table table-hover">
                            <thead class = "thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Event</th>
                                    <th>Artist</th>
                                    <th>City</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Created</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $event = getAll("events");
                                if(mysqli_num_rows($event) > 0) {
                                    foreach($event as $item){
                                        ?>
                                        <tr>
                                            <td> <?= $item['id']; ?></td>
                                            <td> <div class="row"><div class="col-md-7"><img src="uploads/<?= $item['image']; ?>" width = "50px" height = "50px" alt=""></div>
                                            <div class="col-md-5">
                                                <div class="row">
                                            <?=$item['event']; ?></div>
                                            <div class="row">
                                                <?= $item['venue']; ?>
                                            </div>
                                        </div></div>
                                    </td>
                                    <td><?= $item['artist']; ?></td>
                                    <td><?= $item['city']; ?></td>
                                    <td><?= $item['date']; ?></td>
                                    <td><?= $item['time']; ?></td>
                                    <td><?= $item['created_at']; ?></td>

                                        <?php $endTime = strtotime($item['date'] . ' ' . $item['time']);

                                      $currentTime = time();
                                      if ($currentTime > $endTime) {
                                        $over = "true";
                                    } else {
                                        $over = "false";
                                    }
                                        ?>
                                    <td><span class="badge bg-success">Coming soon</span></td>
                                    <td><a href="edit-event.php?id=<?= $item['id']; ?>" class="btn btn-primary">Edit</a></td>


                                        </tr>
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
