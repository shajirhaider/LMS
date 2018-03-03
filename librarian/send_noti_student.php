<?php
session_start();
if (!isset($_SESSION["librarian"])){

    header('Location:login.php');
}
include "header.php";
include "connection.php";
 ?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">

                    </div>

                    <div class="title_right">

                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="well bg-blue"  >
                                <h2 align="center">Send message to Student</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <form class="col-lg-6" name="form1" action="" method="post" enctype="multipart/form-data">

                              <table class="table table-bordered">
                                <tr>
                                  <td>
                                  <select class="form-control"  name="dusername">

                                    <?php
                                    $sql=mysqli_query($db,"SELECT * From student_reg  ");
                                    while ($row=mysqli_fetch_array($sql)) {
                                      ?>
                                      <option value="  <?php echo $row["username"];?>">
                                        <?php echo $row["username"]." --[". $row["enrollment"]."]";?>
                                      </option>
                                      <?php
                                    }
                                      ?>





                                  </select>
                                  </td>
                                </tr>
                                <tr>
                                  <td> <input type="text" name="title" placeholder="Enter Title" class="form-control"> </td>
                                </tr>

                                <tr>

                                  <td> <strong> Message <br> </strong>
                                    <textarea name="msg" rows="8" cols="80" class="form-control" ></textarea> </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="submit" name="submit1" value="Send Message" class="btn btn-success">
                                  </td>
                                </tr>
                              </table>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->
        <?php
        if (isset($_POST["submit1"])) {
        $sql=  mysqli_query($db,"INSERT into messages values ('','$_SESSION[librarian]','$_POST[dusername]','$_POST[title]','$_POST[msg]','n') ")
        or die(mysqli_error($db));

      ?>
      <script type="text/javascript">
      alert ("Message Send Successfully");

      </script>
      <?php

        }


         ?>

        <?php
        include "footer.php";

        ?>
