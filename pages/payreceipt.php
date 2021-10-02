<?php
include "../include/nav.php";
$ref = $_SESSION['tref'];
$sql = "SELECT * FROM `hktransaction` WHERE tref  = '$ref'";
$result=mysqli_query($con,$sql);
 $row=mysqli_fetch_array($result);
            $userid = "$row[userid]";
            $paystatus = "$row[paystatus]";
            $payable = "$row[payable]";
 if (($userid == $_SESSION['uniqueid']) && ($paystatus == 1)){

    $sql = "SELECT * FROM `hkinvest` WHERE payref  = '$ref'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
            $duration = "$row[duration]";
            $slot = "$row[slots]";
            $start = "$row[start]";
            $status = "$row[status]";
            $principal = "$row[principal]";
 }
?>
 <!-- Main Content -->
  <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="invoice">
              <div class="invoice-print">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="invoice-title">
                      <h2 style="color:red;">Receipt</h2>
                      <div class="invoice-number"><img alt="image" src="assets/img/logohk.png"  class="rounded-circle"></div>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Issued To:</strong><br>
                          <?php echo $id; ?><br>
                          <?php echo $fname." ".$oname." ".$lname; ?><br>
                          <?php echo $fulladd; ?>,<br>
                          <?php echo $lga; ?>,<br>
                          <?php echo $state.", ".$country; ?>
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Payment Received by:</strong><br>
                          HK Square Farms<br>
                          Abeokuta<br>
                          Ogun state, Nigeria<br>
                          payment@hksquarefarm.com
                        </address>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <address>
                          <strong>Payment Details:</strong><br>
                          Order #<?php echo $ref; ?><br>
                          Payment Mode  <br>
                          <?php echo $emailadd; ?>
                        </address>
                      </div>
                      <div class="col-md-6 text-md-right">
                        <address>
                          <strong>Payment Date:</strong><br>
                          <?php echo $start; ?><br><br>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-md-12">
                    <div class="section-title">Order Summary</div>
                    <p class="section-lead">All items here cannot be deleted.</p>
                    <div class="table-responsive">
                      <table class="table table-striped table-hover table-md">
                        <tr>
                          <th data-width="40">#</th>
                          <th>Investment Duration</th>
                          <th class="text-center">Number of Slots</th>
                          <th class="text-center">Price per Slot</th>
                          <th class="text-right">Principal Invested</th>
                        </tr>
                        
                       
                        <tr>
                          <td>1</td>
                          <td>HK Square Farm <?php echo $duration; ?> Months Investment </td>
                          <td class="text-center"><?php echo $slot; ?> Slots</td>
                          <td class="text-center">&#8358;1000</td>
                          <td class="text-right">&#8358;<?php echo $principal; ?></td>
                        </tr>
                      </table>
                    </div>
                    <div class="row mt-4">
                      <div class="col-lg-8">
                        <div class="section-title">Payment Terms</div>
                        <p class="section-lead">Not refundable</p>
                       
                      </div>
                      <div class="col-lg-4 text-right">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Subtotal</div>
                          <div class="invoice-detail-value">&#8358;<?php echo $principal; ?></div>
                        </div>
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Charges</div>
                          <div class="invoice-detail-value">&#8358;<?php echo $payable - $principal; ?></div>
                        </div>
                        <hr class="mt-2 mb-2">
                        <div class="invoice-detail-item">
                          <div class="invoice-detail-name">Total</div>
                          <div class="invoice-detail-value invoice-detail-value-lg">&#8358;<?php echo $payable; ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="text-md-right">
                <div class="float-lg-left mb-lg-0 mb-3">
                  
                  <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i> Cancel</button>
                </div>
                <button class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</button>
              </div>
            </div>
          </div>
        </section>
<?php
include "../include/footer.php";
?>