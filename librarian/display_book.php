<?php
session_start();
if (!isset($_SESSION["librarian"])){

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
                                <h2 align="center">Display Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <form class="" action="" method="post" name="form1">
                              <input type="text" name="t1" value="" class="form-control" placeholder="Enter Book Name">
                              <input type="submit" name="submit1" value="search books" class="btn  btn-default"  >
                              </form>
                              <?php

                              if(isset($_POST["submit1"]))
                              {
                                $sql= mysqli_query($db,"SELECT * FROM addbooks WHERE books_name like ('$_POST[t1]%') ");
                               echo "<table class='table table-bordered'>";
                               echo "<tr>";
                               echo "<th>";   echo "Books Name"; echo"</th>";
                               echo "<th>";   echo "Books Image"; echo"</th>";
                               echo "<th>";   echo "Author Name"; echo"</th>";
                               echo "<th>";   echo "Publication Name"; echo"</th>";
                               echo "<th>";   echo "Purchased Date"; echo"</th>";
                               echo "<th>";   echo "Price"; echo"</th>";
                               echo "<th>";   echo "Book Quantity"; echo"</th>";
                               echo "<th>";   echo "Available Quantity"; echo"</th>";
                               echo "</tr>";
                                while($row=mysqli_fetch_array($sql))
                                {
                                  echo "<tr>";
                                  echo "<td>";   echo $row["books_name"]; echo"</td>";
                                  echo "<td>"; ?> <img  src="<?php echo $row["books_image"]; ?>" height="80px" width="80px" > <?php echo"</td>";
                                  echo "<td>";   echo $row["books_author_name"]; echo"</td>";
                                  echo "<td>";   echo $row["books_publication_name"]; echo"</td>";
                                  echo "<td>";   echo $row["books_purchase_date"]; echo"</td>";
                                  echo "<td>";   echo $row["books_price"]; echo"</td>";
                                  echo "<td>";   echo $row["books_qty"]; echo"</td>";
                                  echo "<td>";   echo $row["avail_qty"]; echo"</td>";
                                  echo "</tr>";



                                }
                                echo "</table>";
                              }
                              else {

                              $sql= mysqli_query($db,"SELECT * FROM addbooks");
                             echo "<table class='table table-bordered'>";
                             echo "<tr>";
                             echo "<th>";   echo "Books Name"; echo"</th>";
                             echo "<th>";   echo "Books Image"; echo"</th>";
                             echo "<th>";   echo "Author Name"; echo"</th>";
                             echo "<th>";   echo "Publication Name"; echo"</th>";
                             echo "<th>";   echo "Purchased Date"; echo"</th>";
                             echo "<th>";   echo "Price"; echo"</th>";
                             echo "<th>";   echo "Book Quantity"; echo"</th>";
                             echo "<th>";   echo "Available Quantity"; echo"</th>";
                             echo "</tr>";
                              while($row=mysqli_fetch_array($sql))
                              {
                                echo "<tr>";
                                echo "<td>";   echo $row["books_name"]; echo"</td>";
                                echo "<td>"; ?> <img  src="<?php echo $row["books_image"]; ?>" height="80px" width="80px" > <?php echo"</td>";
                                echo "<td>";   echo $row["books_author_name"]; echo"</td>";
                                echo "<td>";   echo $row["books_publication_name"]; echo"</td>";
                                echo "<td>";   echo $row["books_purchase_date"]; echo"</td>";
                                echo "<td>";   echo $row["books_price"]; echo"</td>";
                                echo "<td>";   echo $row["books_qty"]; echo"</td>";
                                echo "<td>";   echo $row["avail_qty"]; echo"</td>";
                                echo "</tr>";



                              }
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
        include "footer.php";        ?>
