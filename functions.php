<?php
include "connections.php";
function printAll()
{
    global $connection;
    $row = $_GET['select'];
    if ($row !== "Options") {
        $row = strtolower($row);

        $data = $_GET['text'];
        $data = mysqli_escape_string($connection, $data);
        $row = mysqli_escape_string($connection, $row);
        $query = "SELECT * FROM seed WHERE $row = '$data'";
        $result = mysqli_query($connection, $query);
        if (!$result) {
            die(mysqli_error($connection));
        }

        ?>
        <div class="container">
            <div class="row">

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-md-4 col-sm-12 cards">
                        <div class="card">
                            <div class="card-header">
                                <?php echo $row['name']; ?>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Phone Number : <?php echo $row['phone']; ?></h5>
                                <p class="card-text">Address: <?php echo $row['address']; ?></p>
                                <p class="card-text">Address: <?php echo $row['email']; ?></p>

                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    }
}
?>

