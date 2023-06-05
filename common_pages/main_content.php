<?php include "common_pages/conn.php";?>
<section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">About the Prison </h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>

        <div class="card-body">
          Prison-35N7 is able to contain over 500 prisoners and 100 specially trained personals to keep things under control.
          We have limited social facilities due to our prisoners mostly being convicted of heavy crimes which we are not allowed to further describe.<br> 
          <br> <h4>WARNING!</h4>
          • Trying to contect with one of our prisoners outside of the visiting calender will be considered as a thread and ones doing it will receive a warning.
          If the act continues by the same person over 2 attempts, they will be suspected of being involved with that prisoners crime and may be arrested. <br>
          • Sharing Prison-35N7's location is illegal for safety purposes and will be considered as an act of assult which may have consequences to whose attempted.<br>
          • Any other not mantioned disturbing event might cause receiving a warning.<br><br>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->


      <?php if(isset($_SESSION['login'])== "true" ) { ?>
        <br><br><br><p style="font-size:40px; text-align:center; color:#606a73;" >⇓ ⇓ ⇓ See the latest news ⇓ ⇓ ⇓<p><br><br><br><br>
      
      <?php }else{?>

        <div class="info">
        <br><br><br><p style="font-size:40px; text-align:center; color:#606a73;" >You must login to see more<p><br><br><br><br>
      <?php }?>

      <?php if(isset($_SESSION['login'])== "true" ) { ?>
      <!--the prisoner tabel-->
      <div class="row" id="prisoner_info">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Prisoner Information Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

             
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Prisoner</th>
                      <th>Status</th>
                      <th>Reason</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                  
                  <?php
              $query = "SELECT * FROM prisoners";
              $result = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";

                echo "<td>".$row['fullName']."</td>";
                echo "<td>".$row['statue']."</td>";
                echo "<td>".$row['reason']."</td>";
                echo "</tr>";
              }
              ?>
                    


                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <?php }?>

            </div>
            <!-- /.card -->
          </div>
        </div>

      <!--/.end of the prisoner tabel-->


</section>