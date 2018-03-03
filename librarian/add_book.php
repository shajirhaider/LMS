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


                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="well bg-blue"  >
                                <h2 align="center">ADD Books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                              <form class="col-lg-6" name="form1" action="" method="post" enctype="multipart/form-data">

                              <table class="table table-bordered">
                                <tr>
                                  <td>
                                    <input type="text"  class="form-control" name="booksname" value="" placeholder="Books name" required="">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="file"  name="f1" value="" required="">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text"  class="form-control" name="authorname" value="" placeholder="author name" required="">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text"  class="form-control" name="pname" value="" placeholder="publication name" required="">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text"  class="form-control" name="purchasedate" value="" placeholder="purchase date" required="">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text"  class="form-control" name="bookprice" value="" placeholder="Book price" required="">
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <input type="text"  class="form-control" name="bookqty" value="" placeholder="Book Quantity" required="">
                                  </td>
                                </tr>
                              
                                <tr>
                                  <td>
                                  <input type="submit" name="submit1" class="btn btn-success" value="Insert books Details">
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
        if(isset($_POST["submit1"])){
          $bq=$_POST["bookqty"];
          $availbook=$bq-1;
          $tm=md5(time());
          $foldername= $_FILES["f1"]["name"];
          $dst="./books image/".$tm.$foldername;
          $dst1="books image/".$tm.$foldername;
          move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
   $sql= mysqli_query($db,"INSERT INTO addbooks  VALUE('','$_POST[booksname]','$dst1','$_POST[authorname]','$_POST[pname]','$_POST[purchasedate]',
                                        '$_POST[bookprice]','$_POST[bookqty]','$availbook','$_SESSION[librarian]') ");

      ?>

            <script>
            alert("books inserted successfully");
            </script>

          <?php
        }


         ?>

        <?php
        include "footer.php";

        ?>
