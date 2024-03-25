<?php 
    include 'header.php';
?>

<style>
    .container {
        margin-top: 6%;
    }
    button {
        margin-top: 20px;
    }
    /* body {
        background-image: url("../uploads/technician.jpg");
        background-size: cover; /* Ensure the background image covers the entire container
    } */
    /* Adjustments for small devices */
    @media (max-width: 768px) {
        body {
            background-position: center; /* Center the background image on small devices */
        }
    }
</style>

<div class="container">
    <h2>TECHNICIAN ASSIGNMENT</h2>
    <div class="row">
        <div class="col-md-6">
            <img src="../uploads/technician.png" alt="Technician" class="img-fluid"> <!-- Image aligned to the left -->
        </div>
        <div class="col-md-6">
            <form id="assignForm">
                <div class="mb-3">
                    <label for="assign_technician" class="form-label">Select Technician</label>
                    <select class="form-control" name="assign_technician" required="required">
                        <option value="">Select Technician</option>
                        <option value="Rajesh">Rajesh</option>
                        <option value="Suresh">Suresh</option>
                        <option value="Naresh">Naresh</option>
                        <option value="Mahesh">Mahesh</option>
                        <!-- Add options dynamically from the database if needed -->
                    </select>
                </div>
                <!-- Use a regular button to trigger the form submission -->
                <button type="button" class="btn btn-primary" onclick="showSuccessMessage()">Assign Technician</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal for Assignment Success -->
<div class="modal fade" id="assignmentModal" tabindex="-1" role="dialog" aria-labelledby="assignmentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="assignmentModalLabel">Assignment Successful</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                The technician has been successfully assigned.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- Custom JavaScript to trigger the modal -->
<script>
    function showSuccessMessage() {
        // Display success message and trigger modal
        $('#assignmentModal').modal('show');
    }
</script>
