<?php include "header.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Add Package/ Send notif
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Add Package/ Send notif
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
<form action="insert.php" method="post">

                        <form role="form">

                            <div class="form-group">
                                <label>Title</label>

                                 <input type="text" name="title" class="form-control" id="firstName">

                                <p class="help-block">If you leave it blank, auto text will be placed.</p>
                            </div>

                            <div class="form-group">
                                <label>Sender</label>
                             <input type="text" name="sender" class="form-control" id="firstName">
                            </div>

                                           <div class="form-group">
                                <label>Reciever</label>
        <input type="text" name="reciever" class="form-control" id="firstName">
                            </div>


        

                            <div class="form-group">
                                <label>Comment</label>

                                       

                                <textarea name = "comm" class="form-control" rows="3"></textarea>
                            </div>
<div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">Send Notification
                                                </label>
                                            </div>
                            <input type="submit" class="btn btn-default" value="Send notification & add packge">

                            <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

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

</body>

</html>
