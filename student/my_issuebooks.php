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
                                <h2 align="center">My Issued Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <table class="table table-bordered">
                                <th>

                                  Student Enrollment NO

                                </th>
                                <th> Issued Books </th>
                                <th> Books Issued Date</th>

                                <?php
                                $sql=mysqli_query($db,"SELECT * FROM issuse_book WHERE student_username='$_SESSION[username]'" );
                                while ($row=mysqli_fetch_array($sql)) {
                                echo "<tr>";
                                echo "<td>";
                                echo $row["student_enrollment"];
                                echo "</td>";

                                echo "<td>";
                                echo $row["books_name"];
                                echo "</td>";

                                echo "<td>";
                                echo $row["books_issue_date"];
                                echo "</td>";


                                }



                                ?>



                              </table>



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
