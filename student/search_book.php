<?php
session_start();
if (!isset($_SESSION["username"])){

    header('Location:login.php');
}
include "connection.php";
include "header.php";
 ?>
        <!-- page content area main -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                     </div>

                    <div class="title_right">

                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="well bg-blue"  >
                                <h2 align="center">Search Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <form class="" action="" name="form1" method="post">
                                <table class="">
                                  <tr>
                                    <td>
                                      <input type="text" name="t1" placeholder="Enter Books Name" class="form-control" required >

                                    </td>
                                    <td>
                                      <input type="submit" name="submit1" value="Search Books" class="form-control btn btn-success">
                                    </td>
                                  </tr>

                                </table>
                              </form>
                              <?php

                              if(isset ($_POST["submit1"]))
                              {

                                $sql=mysqli_query($db,"SELECT * FROM addbooks WHERE books_name like ('%$_POST[t1]%') ");
                                echo "<table class='table table-bordered ' >";
                                echo "<tr>";
                                $i=0;
                                while ($row=mysqli_fetch_array($sql)) {
                                $i++;
                                echo "<td>";
                                ?>

                                <img src="../librarian/<?php echo $row["books_image"];?>" alt="" height="100" width="100" >
                                <?php

                                echo "<br>";
                                echo "<b>"."Books Name:"." ".$row["books_name"];
                                echo "</br>";
                                echo "<b>"."Available Quantity:"." ".$row["avail_qty"];
                                echo "</br>";
                                echo "</td>";
                                if($i==2){

                                  echo "</tr>";

                                  echo "<tr>";
                                  $i=0;


                                }

                                }

                                echo "</tr>";
                                echo "</table>";




                              }
                              else{
                                $sql=mysqli_query($db,"SELECT * FROM addbooks ");
                                echo "<table class='table table-bordered ' >";
                                echo "<tr>";
                                $i=0;
                                while ($row=mysqli_fetch_array($sql)) {
                                $i++;
                                echo "<td>";
                                ?>

                                <img src="../librarian/<?php echo $row["books_image"];?>" alt="" height="100" width="100" >
                                <?php

                                echo "<br>";
                                echo "<b>"."Books Name:"." ".$row["books_name"];
                                echo "</br>";
                                echo "<b>"."Available Quantity:"." ".$row["avail_qty"];
                                echo "</br>";
                                echo "</td>";
                                if($i==2){

                                  echo "</tr>";

                                  echo "<tr>";
                                  $i=0;


                                }

                                }
                                echo "</tr>";
                                echo "</table>";


                              }




                              ?>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <?php
        include "footer.php";

        ?>
