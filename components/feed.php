<?php
    include 'dbh.inc.php';
?>

<div class="container">
    <div class="col-md-7">
        <div class="box">
            <div class="box-title text-center">
                <h4>We’ve Made Our Terms of Use Clearer.</h4>
            </div>
            <div class="box-body text-center">
                <p>We’re updating our terms to make it easier to understand what is allowed on Instagram<br>how our service works. Continuing to use the app means you accept these<br>updates.</p>
            </div>
        </div>

<?php

$sql = "SELECT * FROM posts;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="box">
                <div class="account">
                    <i class="fas fa-user-circle fa-2x"></i>
                    <span>unknown</span>
                </div>
                <div class="box-title ml-10-custom">
                    <h4><b><?php echo $row['posttitle'] ?></b></h4>
                </div>
                <div class="box-body ml-10-custom">
                    <h4><?php echo $row['posttext'] ?></h4>
                </div>
            </div>
        <?php
    }
}
?>
</div>