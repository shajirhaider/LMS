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
                               <h2 align="center">Issue Books</h2>

                               <div class="clearfix"></div>
                           </div>
                           <div class="x_content">

                           <form class="" action="" method="post" name="form1">

                           <table class="table table-bordered">
                                 <tr>
                                   <td>
                                     <select  name="enr" class="form-control selectpicker " name="">

                                       <?php
                                              $sql= mysqli_query($db,"SELECT enrollment FROM student_reg ");
                                              while($row=mysqli_fetch_array($sql))
                                              {
                                                echo "<option>";
                                                echo $row["enrollment"];
                                                echo "</option>";

                                              }

                                                ?>
                                              </select>
                              </td>
                              <td>
                                <input type="submit" name="submit1" value="Search" class="form-control btn btn-danger">
                              </td>
                          </tr>
                      </table>
                      <?php
                           if(isset($_POST["submit1"]))
                           {
                            $sql5=mysqli_query($db,"SELECT * FROM student_reg WHERE enrollment='$_POST[enr]'");
                             while($row5=mysqli_fetch_array($sql5))
                             {
                               $firstname=$row5["firstname"];
                                 $lastname=$row5["lastname"];
                                 $username=$row5["username"];
                                  $email=$row5["email"];
                                 $contact=$row5["contact"];
                                 $sem=$row5["sem"];
                                 $enrollment=$row5["enrollment"];
                                 $_SESSION["enrollment"]=$enrollment;
                                 $_SESSION["username"]=$username;
                               }

                              ?>
                              <tr>
                              <td>
                                <h4> Enrollment No</h4>
                                <input type="text" name="enrollment" value="<?php echo '  '. $enrollment;?>" placeholder="" class="form-control" disabled>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <h4> Student Name</h4>
                                <input type="text" name="studentname" value="<?php  echo '  '. $firstname.' '.$lastname;?>" placeholder="" class="form-control" required>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <h4>  Semester No</h4>
                                <input type="text" name="studentsem" value="<?php echo '  '.$sem;?>" placeholder="" class="form-control" required>
                              </td>
                            </tr>
                            <tr>
                                <td>
                                  <h4> Contact</h4>
                                  <input type="text" name="studentcontact" value="<?php echo '  '.$contact;?>" placeholder="" class="form-control" required>
                                </tr>
                                  <tr>
                                    <td>
                                      <h4> Email</h4>
                                      <input type="text" name="studentemail" value="<?php echo '  '. $email;?>" placeholder="email" class="form-control" required>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <h4> Books Name</h4>
                                      <select  name="booksname" class="form-control selectpicker">

                                        <?php
                                     $sql=mysqli_query($db,"SELECT books_name From addbooks " );
                                     while($row=mysqli_fetch_array($sql))
                                     {
                                         echo "<option >";
                                         echo $row["books_name"];


                                         echo "</option>";


                                     }
                                     ?>
                                   </select>
                                 </td>
                               </tr>

                                     <tr>
                                    <td>
                                      <h4> Book Issue Date</h4>
                                      <input type="text" name="bookissuedate" value="<?php echo '  '.date("d/M/Y");?>" placeholder="" class="form-control" required>
                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <h4> Student Username</h4>
                                      <input type="text" name="studentusername" value="<?php echo '  '.$username;?>" placeholder="" class="form-control" disabled>

                                    </td>
                                  </tr>

                                  <tr>
                                    <td>
                                      <input type="submit" name="submit2" value="Issue Book"  class="form-control btn btn-success">
                                    </td>
                                  </tr>
                                </td>
                              </tr>
                              <?php
                          }

                            ?>
                          </select>
                             </td>
                           </tr>
                          </form>

                          <?php

                              if(isset($_POST["submit2"]))
                                {
                            $qty=0;
                           $sql=mysqli_query($db,"SELECT * FROM addbooks WHERE books_name='$_POST[booksname]'");

                           while ($row=mysqli_fetch_array($sql))
                           {
                             $qty=$row["avail_qty"];

                           }
                           if($qty==0)
                          {
                            ?>
                            <div class="alert alert-danger clo-lg-6 col-lg-push 3">
                            <strong >This Books are Not availavle </strong>

                          </div>
                          <?php
                        }

                        else {

                           mysqli_query($db,"insert into issuse_book value('','$_SESSION[enrollment]','$_POST[studentname]','$_POST[studentsem]','$_POST[studentcontact]','$_POST[studentemail]','$_POST[booksname]','$_POST[bookissuedate]','','$_SESSION[username]')");
                           mysqli_query($db,"UPDATE addbooks SET avail_qty= avail_qty-1 WHERE books_name='$_POST[booksname]'  ");
                           ?>
                           <script type="text/javascript">
                            alert("BOOKS ISSUED SUCCESSFULLY!! ");
                            window.location.href=window.location.href;
                           </script>
                           <?php

                           }
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
