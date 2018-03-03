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
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="well bg-blue"  >
                                <h2 align="center">Books Details</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <?php
                              $sql=mysqli_query($db,"SELECT * FROM addbooks ");
                              echo "<table class='table table-bordered ' >";
                              echo "<tr>";
                              $i=0;
                              while ($row=mysqli_fetch_array($sql))
                              {
                              $i++;
                              echo "<td>";
                              ?>

                              <img src="../librarian/<?php echo $row["books_image"];?>" alt="" height="100" width="100" >
                              <?php

                              echo "<br>";
                              echo "<b>"."Books Name:"." ".$row["books_name"];
                              echo "</br>";
                                echo "<b>"."Books Quantity:"." ".$row["books_qty"];
                                echo "<br>";
                              echo "<b>"."Available Quantity:"." ".$row["avail_qty"];
                              echo "<br>";
                              ?> <a href="all_student_of_this_book.php?books_name=<?php echo $row["books_name"]; ?>" style="color:red">Student Records</a>
                              <?php

                              echo "</br>";
                              echo "</td>";

                              if($i==2)
                              {
                                echo "</tr>";
                                echo "<tr>";
                                $i=0;
                              }
                            }
                              echo "</tr>";
                              echo "</table>";
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
