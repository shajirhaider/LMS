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
                                <h2 align="center">Return Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <form class="" action="" method="post" name="form1">
                              <table class="table table-bordred">
                                <tr>
                                  <td>
                                    <select class="form-control" name="enr">
                              <?php

                                  $sql=mysqli_query($db,"SELECT student_enrollment FROM issuse_book WHERE books_return_date=''");

                                  while($row=mysqli_fetch_array($sql)){

                                    echo "<option>";
                                    echo  $row["student_enrollment"];
                                    echo "</option>";
                                  }

                                   ?>

                                </select>
                              </td>
                                 <td>
                                   <input type="submit" name="submit1" value="search" class="form-control btn btn-success" >

                                 </td>
                               </tr>

                             </table>

                           </form>

                           <?php

                             if (isset($_POST["submit1"]))
                             {
                               $sql=mysqli_query($db,"SELECT *  from issuse_book WHERE student_enrollment='$_POST[enr]'");

                                 echo "<table class='table table-bordered'>";
                                 echo "<tr>";
                                 echo "<th>"; echo "Student Enrollment"; echo"</th>";
                                 echo "<th>"; echo "Student Name"; echo"</th>";
                                 echo "<th>"; echo "Student Semester"; echo"</th>";
                                 echo "<th>"; echo "Student contact"; echo"</th>";
                                 echo "<th>"; echo "Student Email"; echo"</th>";
                                 echo "<th>"; echo "Books Name"; echo"</th>";
                                 echo "<th>"; echo "Books Issue Date"; echo"</th>";
                                 echo "<th>";  echo "Return Books"; echo"</th>";
                                 echo"</tr>";
                                 while($row=mysqli_fetch_array($sql))
                      {
                                echo "<tr>";
                                echo "<td>"; echo $row["student_enrollment"];  echo "</td>";
                                echo "<td>"; echo $row["student_name"];  echo "</td>";
                                echo "<td>"; echo $row["student_sem"];  echo "</td>";
                                echo "<td>"; echo $row["student_contact"];  echo "</td>";
                                echo "<td>"; echo $row["student_email"];  echo "</td>";
                                echo "<td>"; echo $row["books_name"];  echo "</td>";
                                echo "<td>"; echo $row["books_issue_date"];  echo "</td>";
                                echo "<td>"; ?> <a href="return.php?id=<?php echo $row["id"]; ?>">Return Books </a>
                                  <?php echo "</td>";
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
