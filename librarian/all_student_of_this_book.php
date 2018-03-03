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
                                <h2 align="center">Students Information</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <?php
                                $sql=mysqli_query($db,"SELECT * FROM issuse_book WHERE books_name='$_GET[books_name]' && books_return_date=''  ");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                  echo "<th>";   echo "Student Name";  echo "</th>";
                                    echo "<th>";   echo "Student Enrollment No";  echo "</th>";
                                      echo "<th>";   echo "Book Name";  echo "</th>";
                                        echo "<th>";   echo "Email";  echo "</th>";
                                          echo "<th>";   echo "Student Contact";  echo "</th>";
                                            echo "<th>";   echo "Student Book Issue Date";  echo "</th>";
                                            echo "</tr>";
                                while ($row=mysqli_fetch_array($sql)) {
                                  echo "<tr>";
                                  echo "<td>"; echo $row["student_name"];  echo "</td>";
                                    echo "<td>"; echo $row["student_enrollment"];  echo "</td>";
                                      echo "<td>"; echo $row["books_name"];  echo "</td>";
                                        echo "<td>"; echo $row["student_email"];  echo "</td>";
                                          echo "<td>"; echo $row["student_contact"];  echo "</td>";
                                            echo "<td>"; echo $row["books_issue_date"];  echo "</td>";





                                  echo "</tr>";
                                }



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
