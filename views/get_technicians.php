<?php
date_default_timezone_set('Asia/Manila');
include 'header.php';

// Establish a database connection (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$database = "lms19";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch technicians from the database
$technicians = array();
$sql = "SELECT id, Firstname FROM technician";
$result = $conn->query($sql);

if (!$result) {
    echo "Error: " . $conn->error;
} else {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $technicians[] = $row;
        }
    }
}

$conn->close();
?>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 col-md-2 sidebar">
    <!-- ... (previous code) ... -->
</div><!--/.sidebar-->

<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">
    <div class="row">
        <!-- ... (previous code) ... -->
        <form class="frm_borrow" action="select_technician.php" method="GET">
            <div class="form-group">
                <label class="">Select Technician</label>
                <select class="form-control input-lg" name="assign_technician" required="required">
                    <option value=""></option>
                    <?php foreach ($technicians as $technician) { ?>
                        <option value="<?php echo $technician['id']; ?>"><?php echo $technician['Firstname']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <!-- ... (rest of the form) ... -->
        </form>
        <!-- ... (rest of the code) ... -->
    </div>
</div>

<?php include 'footer.php'; ?>
