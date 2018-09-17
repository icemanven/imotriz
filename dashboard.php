<?php
/**
 * Created by PhpStorm.
 * User: josei
 * Date: 9/16/2018
 * Time: 6:32 PM
 */
?>
<!-- Icon Cards-->
<div class="row">
    <?php
    $sqll = "SELECT * from sales_stats WHERE month='Mar'";
    if (mysqli_query($db, $sqll))
    {
        echo "";
    }
    else
    {
        echo "Error: " . $sqll . "<br>" . mysqli_error($db);
    }
    $result = mysqli_query($db, $sqll);
    if (mysqli_num_rows($result)> 0) {
        while($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5"><?php echo $row['Vistors']; ?> Vistors</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                    </a>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>
<?php
$sqlll = "SELECT sales from sales_stats";
if (mysqli_query($db, $sqlll))

{

    echo "";

}

else

{

    echo "Error: " . $sqlll . "<br>" . mysqli_error($db);

}

$result = mysqli_query($db, $sqlll);

$number=array();

if (mysqli_num_rows($result) > 0)

{

// output data of each row

    while($row = mysqli_fetch_assoc($result))

    {

        $number[]=$row['sales'];

    }

}

else

{

    echo "0 results";

}

$number_formated= "[".implode(",",$number)."]";

?>

<script type="text/javascript">

    window.dataf= <?php echo $number_formated; ?>

</script>

<!-- Area Chart Example-->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-chart-area"></i>
        Area Chart Example</div>
    <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example</div>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>

                <tr>

                    <th>ID</th>

                    <th>Name of Product</th>

                    <th>Price of Product</th>

                    <th>Product Catrogy</th>

                    <th>Product Details</th>

                </tr>

                </thead>

                <tfoot>

                <tr>

                    <th>ID</th>

                    <th>Name of Product</th>

                    <th>Price of Product</th>

                    <th>Product Catrogy</th>

                    <th>Product Details</th>

                </tr>

                </tfoot>

                <?php

                $sql = 'SELECT * from products';

                if (mysqli_query($db, $sql)) {

                    echo "";

                } else {

                    echo "Error: " . $sql . "<br>" . mysqli_error($db);

                }

                $count=1;

                $result = mysqli_query($db, $sql);

                if (mysqli_num_rows($result) > 0) {

// output data of each row

                    while($row = mysqli_fetch_assoc($result)) { ?>

                        <tbody>

                        <tr>

                            <th>

                                <?php echo $row['product_id']; ?>

                            </th>

                            <td>

                                <?php echo $row['product_name']; ?>

                            </td>

                            <td>

                                <?php echo $row['product_price']; ?>

                            </td>

                            <td>

                                <?php echo $row['product_cat']; ?>

                            </td>

                            <td>

                                <?php echo $row['product_details']; ?>

                            </td>

                        </tr>

                        </tbody>

                        <?php

                        $count++;

                    }

                } else {

                    echo '0 results';

                }

                ?>

            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>
