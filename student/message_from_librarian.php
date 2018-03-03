<?php
session_start();
if (!isset($_SESSION["username"])){

    header('Location:login.php');
}
include "header.php";
include "connection.php";

$sql=mysqli_query($db,"UPDATE messages set read1='y' where dusername='$_SESSION[username]'");
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
                                <h2 align="center">Message from Librarian</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              <table class="table table-bordered">
                                <tr>


                                <th>NAME</th>
                                <th>Title</th>
                                <th>Message</th>
                                  </tr>
                                  <?php
                                  $sql=mysqli_query($db,"SELECT * FROM messages WHERE dusername='$_SESSION[username]' order by id desc  ");
                                  while ($row=mysqli_fetch_array($sql)) {

                                    $sql1=mysqli_query($db,"SELECT * FROM librarian Where username='$row[susername]' ");
                                    while ($row1=mysqli_fetch_array($sql1)) {
                                      $fullname=$row1["firstname"]." ".$row1["lastname"];

                                  echo "<tr>";
                                  echo "<td>";echo $fullname; echo"</td>";
                                    echo "<td>";echo $row["title"]; echo"</td>";
                                      echo "<td>";echo $row["msg"]; echo"</td>";
                                  echo "</tr>";

                                  }
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
