<?php include "header.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Packages <small>Statistics Overview</small>
                        </h1>
       
                    </div>
                </div>
                <!-- /.row -->


                <!-- /.row -->

                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
<?php
$sql = "SELECT id, toper, title,comm,sender,datee FROM notifs";
$result = $conn->query($sql);

echo $result->num_rows;
?>


                                        </div>
                                        <div>Packages</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>Sent notifications</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>


                    </div>
<!--

                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>Support questions</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    -->
             
                <!-- /.row -->

   </div>

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> Package listing</h3>
                            </div>
                            <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">







                                <thead>
                                    <tr>

                                        <th>Package</th>
                                        <th>Reciever MU ID</th>
                                        <th>From</th>
                                        <th>Date recieved</th>
<th>Comment</th>
 <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

<?php
$sql = "SELECT id, toper, title,comm,sender,datee FROM notifs order by id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) { ?>

                                   <tr class="active">
                                        <td><?php echo $row ["title"]; ?></td>
                                        <td><?php echo $row ["toper"]; ?></td>
                                        <td><?php echo $row ["sender"]; ?></td>
                                                   <td><?php echo $row ["datee"]; ?></td>

                                                          <td><?php echo $row ["comm"]; ?></td>
                                                          <td><a href='./delete_pack.php?id=<?php echo $row ["id"]; ?>'> Delete</a></td>
                                    </tr>

    	
   

        <?php 

        //     echo "id: " . $row["id"]. " - Name: " . $row["title"]. " " . $row["toper"]. "<br>";
    }
} else {
    echo "0 results";
}

?>
<!--

                                    <tr class="active">
                                        <td>Package one</td>
                                        <td>1265</td>
                                        <td>John Doe</td>
                                                   <td>Today @ 12:00</td>
                                    </tr>




                                    <tr class="success">
                                       <td>Package two</td>
                                        <td>261</td>
                                        <td>John Doe</td>
                                         <td>Today @ 12:00</td>
                                    </tr>
                                    <tr class="warning">
                                 <td>Package another</td>
                                        <td>665</td>
                            <td>John Doe</td>
                                     <td>Today @ 12:00</td>
                                    </tr>
                                    <tr class="danger">
                                      <td>Package one</td>
                                        <td>9516</td>
                                  <td>John Doe</td>
                                   <td>Today @ 12:00</td>
                                    </tr>
                                    <tr>
                            <td>Package damaged</td>
                                        <td>23</td>
                              <td>John Doe</td>
                                        <td>Today @ 12:00</td>
                                    </tr>
                                    <tr>
                                        <td>Package one</td>
                                        <td>421</td>
                                     <td>John Doe</td>
                                        <td>$724.32</td>
                                    </tr>
                                    <tr>
                       <td>Package one</td>
                                        <td>1233</td>
                                        <td>93.2%</td>
                                        <td>$126.34</td>
                                    </tr>

                                    -->
                                </tbody>
                            </table>
                                <div class="text-right">
                                    <a href="#">View All Transactions <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
