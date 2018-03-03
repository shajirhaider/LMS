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
                                <h2 align="center">Student Information</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php
                                $sql=mysqli_query($db,"SELECT * FROM student_reg ");

                                echo '<table class="table table-bordered">';
                                echo '<tr>';
                                echo '<th>';  echo 'firstname:'; echo '</th>';
                               echo '<th>';  echo 'lastname:'; echo '</th>';
                               echo '<th>';  echo 'usertname:'; echo '</th>';
                               echo '<th>';  echo 'email:'; echo '</th>';
                               echo '<th>';  echo 'contact:'; echo '</th>';
                               echo '<th>';  echo 'Semester:'; echo '</th>';
                               echo '<th>';  echo 'Enrollment no:'; echo '</th>';
                               echo '<th>';  echo 'status:'; echo '</th>';
                                echo '<th>';  echo 'Approve:'; echo '</th>';
                                 echo '<th>';  echo 'Deny:'; echo '</th>';
                               echo '</tr>';

                                while($row=mysqli_fetch_array($sql))
                                {
                                  echo '<tr>';

                                  echo '<td>';  echo $row["firstname"]; echo '</td>';
                                  echo '<td>';  echo $row["lastname"]; echo '</td>';
                                  echo '<td>';  echo $row["username"]; echo '</td>';
                                  echo '<td>';  echo $row["email"]; echo '</td>';
                                  echo '<td>';  echo $row["contact"]; echo '</td>';
                                  echo '<td>';  echo $row["sem"]; echo '</td>';
                                  echo '<td>';  echo $row["enrollment"]; echo '</td>';
                                  echo '<td>';  echo $row["status"]; echo '</td>';
                                  echo '<td>'; ?> <a href="approve.php?id=<?php echo $row["id"]; ?>">Approve</a> <?php echo '</td>';
                                  echo '<td>'; ?> <a href="deny.php?id=<?php echo $row["id"]; ?>">Deny</a> <?php echo '</td>';
                                  echo '</tr>';

                                }
                                echo '</table>';





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
