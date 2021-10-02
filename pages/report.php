<?php
include "../include/nav.php";

$uref = $_SESSION['uniqueid'];

$sql = "SELECT count('invid') FROM `hkinvest` WHERE userid  = '$uref'";
$result=mysqli_query($con,$sql);
                  $row=mysqli_fetch_array($result);
                  $countinv = "$row[0]";

 $sql = " SELECT Sum(`principal`) as total FROM `hkinvest` WHERE userid  = '$uref'";
  $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $princinv = "$row[total]";

 $sql = " SELECT Sum(`slots`) as total FROM `hkinvest` WHERE userid  = '$uref'";
  $result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
 $slotinv = "$row[total]";
?>
<!-- Main Content -->
   <div class="main-content">
        <section class="section">
          <div class="section-body">
          <div class="row ">
              <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-green">
                  <div class="card-statistic-3">
                    <div class="card-icon card-icon-large"><i class="fa fa-briefcase"></i></div>
                    <div class="card-content">
                      <h4 class="card-title">Number of Active Investment</h4>
                      <span> <?php echo $countinv ?></span>
                      <div class="progress mt-1 mb-1" data-height="8">
                        <div class="progress-bar l-bg-purple" role="progressbar" data-width="100%" aria-valuenow="100"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mb-0 text-sm">
                        
                        <span class="text-nowrap">as at <?php echo date("d-m-Y"); ?></span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-cyan">
                  <div class="card-statistic-3">
                    <div class="card-icon card-icon-large"><i class="fa fa-money-bill-alt"></i></div>
                    <div class="card-content">
                      <h4 class="card-title">Total Amount Invested</h4>
                      <span>&#8358;<?php echo $princinv ?></span>
                      <div class="progress mt-1 mb-1" data-height="8">
                        <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mb-0 text-sm">
                        
                        <span class="text-nowrap">as at <?php echo date("d-m-Y"); ?></span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-purple">
                  <div class="card-statistic-3">
                    <div class="card-icon card-icon-large"><i class="fa fa-award"></i></div>
                    <div class="card-content">
                      <h4 class="card-title">Total Number of Slots Owned</h4>
                      <span><?php echo $slotinv ?></span>
                      <div class="progress mt-1 mb-1" data-height="8">
                        <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mb-0 text-sm">
                      <span class="text-nowrap">as at <?php echo date("d-m-Y"); ?></span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6">
                <div class="card l-bg-orange">
                  <div class="card-statistic-3">
                    <div class="card-icon card-icon-large"><i class="fa fa-money-bill-alt"></i></div>
                    <div class="card-content">
                      <h4 class="card-title">Earning</h4>
                      <span>$2,658</span>
                      <div class="progress mt-1 mb-1" data-height="8">
                        <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                          aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <p class="mb-0 text-sm">
                        <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                        <span class="text-nowrap">Since last month</span>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            
            
            <div class="row">
              <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Investment Plans</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th>
                            S/N
                          </th>
                          <th style="text-align: center;">Number of Slots</th>
                          <th style="text-align: center;">Amount</th>
                          <th style="text-align: center;">Duration</th>
                          <th style="text-align: center;">Start Date</th>
                          <th style="text-align: center;">Maturity Date</th>
                          <th style="text-align: center;">Action</th>
                        </tr>
                        <tr>
                        
                        <?php
            $count=1;
			    $sql_query = "select * from `hkinvest` WHERE userid  = '$uref'" ;
                 $result = mysqli_query($con,$sql_query);
                 if (mysqli_num_rows($result) > 0) {
                     // output data of each row
                 while($row = mysqli_fetch_assoc($result)) {
     
             echo'
                        <td>'.$count++.'</td>
                      <td style="text-align: center;"><strong>'.$row["slots"].'</strong></td>
                      <td style="text-align: center;"><strong>&#8358;'.$row["principal"].'</strong></td>
                      <td style="text-align: center;"><strong>'.$row["duration"].'</strong></td>
                      <td style="text-align: center;"><strong>'.$row["start"].'</strong></td>
                      <td style="text-align: center;"><strong>'.$row["start"].'</strong></td>
                      <td style="text-align: center;"><a href="manageinv.php?invref='.$row["invid"].'" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i
                      class="fas fa-pencil-alt"></i></a></td>
                     ';
            
            ?>
                                            
                                            
                                            </tr>
                                            <?php 
                 }
                                        }?> 

                        
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            
           
           
          </div>
        </section>
         <?php
include "../include/footer.php";
?>