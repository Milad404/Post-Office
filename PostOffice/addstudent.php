<?php include "header.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Add Student
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Add student
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">


                    <div class="col-lg-6">
<form action="insertstudent.php" method="post">

                        <form role="form">

               
                                <label>Name </label>

                                 <input type="text" name="firstName" class="form-control" id="firstName">

        


                                                             <label>Last name </label>

                                 <input type="text" name="lastName" class="form-control" id="lastName">

                                                   <label>Box number </label>

                                 <input type="text" name="ponum" class="form-control" id="ponum">
               
                                                 <label>Telephone Number</label>

                                 <input type="text" name="telnum" class="form-control" id="telnum">


                       

   

                    </div>
         


                    <div class="col-lg-6">


                     
                           <label>Student's Methodist University ID </label>
<div class="form-group input-group">
       
                                            <span class="input-group-addon">MU ID</span>
                                            <input type="text" class="form-control" name="muid" placeholder="Enter MU id">
                                        </div>



   <label>Student's email </label>
<div class="form-group input-group">

                                            <span class="input-group-addon">@</span>
                                            <input type="text" class="form-control" name="emailz" placeholder="Enter email">
                                        </div>


<div class="form-group has-success">
                                            <label class="control-label" for="inputSuccess">Temp Password</label>
                                            <input type="text" class="form-control" name="temppass"id="inputSuccess" value="123pass123">
                                        </div>


                         

                     
<div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                       <b><u>     Temporary password will be used by student to login into MU Post Office Application. After login  Post Office will be able to send him or her notification directly to mobile phone.</u></b>
                            </div>
                    </div>

                         <input type="submit" class="btn btn-success" value="Add student">
                         <button type="reset" class="btn btn-default">Reset Button</button>

                        </form>

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
