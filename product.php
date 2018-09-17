<?php
/**
 * Created by PhpStorm.
 * User: josei
 * Date: 9/16/2018
 * Time: 3:58 PM
 */
?>

<div class="row">

    <div class="col-12">

    <h1>Create Product </h1>

    </div>

    <div class="col-md-8">

    <form method="post" action="pserver.php">

        <div class="form-group">

        <label>Product Name</label>

        <input type="text" class="form-control" name="pname" required>

        </div>

        <div class="form-group">

        <label>Product Price</label>

        <input type="number" class="form-control" name="pirce" required>

        </div>

        <div class="form-group">

        <label>Product Catgory</label>

        <input type="text" class="form-control" name="pcat" required>

        </div>

        <div class="form-group">

        <label>Product Details</label>

        <textarea class="form-control" name="pdetails" required></textarea>

        </div>

        <button type="submit" class="btn btn-primary" name="reg_p">Submit</button>

    </form>

    </div>

</div>























<!-- Scroll to Top Button-->

<a class="scroll-to-top rounded" href="#page-top">

<i class="fa fa-angle-up"></i>

</a>

<!-- Logout Modal-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

<div class="modal-dialog" role="document">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>

<button class="close" type="button" data-dismiss="modal" aria-label="Close">

<span aria-hidden="true">×</span>

</button>

</div>

<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>

<div class="modal-footer">

<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

<a class="btn btn-primary" href="login.php">Logout</a>

</div>

</div>

</div>

</div>

<!-- Bootstrap core JavaScript-->

<script src="vendor/jquery/jquery.min.js"></script>

<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->

<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->

<script src="js/sb-admin.min.js"></script>

