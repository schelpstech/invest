<?php
include "../include/nav.php";
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
            <div class="col-12 col-md-4 col-lg-4">
            <div class="pricing pricing-highlight">
                  <div class="pricing-title">
                  <strong> 3 Months</strong>
                  </div>
                  <div class="pricing-padding">
                    <div class="pricing-price">
                      <div>&#8358;1000</div>
                      <div>per slot</div>
                    </div>
                    <div class="pricing-details">
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Maturity = 3months</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Interest = 40% per annum</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Minimum Slot = 1 Slot</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Maximum Slot = 100 Slots</div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="pricing-cta">
                  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal"><strong>Select this Investment Option</strong><i class="fas fa-arrow-right"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
              <div class="pricing pricing-highlight">
                  <div class="pricing-title">
                  <strong> 6 Months</strong>
                  </div>
                  <div class="pricing-padding">
                    <div class="pricing-price">
                      <div>&#8358;1,000</div>
                      <div>per slot</div>
                    </div>
                    <div class="pricing-details">
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Maturity = 6 months</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Interest = 40% per annum</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Minimum Slot = 10 Slot</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Maximum Slot = 5,000 Slots</div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="pricing-cta">
                  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal"><strong>Select this Investment Option</strong><i class="fas fa-arrow-right"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-4">
              <div class="pricing pricing-highlight">
                  <div class="pricing-title">
                  <strong> 12 Months</strong>
                  </div>
                  <div class="pricing-padding">
                    <div class="pricing-price">
                      <div>&#8358;1,000</div>
                      <div>per slot</div>
                    </div>
                    <div class="pricing-details">
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Maturity = 12 months</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Interest = 40% per annum</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Minimum Slot = 10 Slot</div>
                      </div>
                      <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">Maximum Slot = 10,000 Slots</div>
                      </div>
                      
                    </div>
                  </div>
                  <div class="pricing-cta">
                  <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal"><strong>Select this Investment Option</strong><i class="fas fa-arrow-right"></i></button>
                  </div>
                </div>
              </div>
         
             
            </div>
          </div>
        </section>
         <!-- Modal with form -->
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
          aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="formModal">Investment Subscription Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form class="">
                <div class="form-row">
                      <div class="form-group col-md-6">
                    <label>Duration</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-clock"></i>
                        </div>
                      </div>
                      
                      <select type="text" class="form-control" duration="slots"  id="duration" name="duration" onchange="calculator();">
                        <option value="3"> 3 Months</option>
                        <option value="6"> 6 Months</option>
                        <option value="12"> 12 Months</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Number of Slots</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-hand-holding-usd"></i>
                        </div>
                      </div>
                      <input type="number" class="form-control" min="1" id="slots" onchange="calculator();">
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Cost per Slot</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-money-bill"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control"  disabled value="&#8358;1000" name="slots">
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-money-bill"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" disabled name="amountval" id="amountval">
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Charges</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-money-bill-alt">&#8358;</i>
                        </div>
                      </div>
                      <input type="text" class="form-control" disabled  name="chargesval" id="chargesval">
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Total Amount</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-money-check-alt">&#8358;</i>
                        </div>
                      </div>
                      <input type="text" class="form-control" disabled name="payval" id="payval">
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Discounted rate</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-money-check-alt"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" disabled  name="rate" id="rate">
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Expected Return on Investment</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-money-check-alt"></i>
                        </div>
                      </div>
                      <input type="text" class="form-control" disabled  name="returns" id="returns">
                    </div>
                  </div>
                  </div>
                  <div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" required="yes" class="custom-control-input" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Proceed to Make Payment to Complete Subscription</label>
                    </div>
                  </div>
                  <script src="https://checkout.flutterwave.com/v3.js"></script>
                  <button type="button" class="btn btn-primary btn-block" onclick="makePayment();" >Pay Now</button>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
<script>
  
  
  function  makePayment() {

    var payable =$("#payval").val();
    var duration = $("#duration").val();
    var numslots = $("#slots").val();
    var tref= "pref"+Math.floor(Math.random() * 10000000);
      if(numslots == ""){
           alert("Enter number of slots")
      }
    $.ajax({
        url:'../backend/payprecord.php',
        method:'POST',
        data:{
            
            payable:payable,
            duration:duration,
            numslots:numslots,
            tref:tref
        },
    
       success: FlutterwaveCheckout({
      public_key: "FLWPUBK-847b8c9bf7252fb2a33cfcc3fe8fd32a-X",
      tx_ref: "pref"+Math.floor(Math.random() * 10000000),
      amount: payable,
      currency: "NGN",
      country: "NG",
      payment_options: " ",
      redirect_url: // specified redirect URL
        "https://callbacks.piedpiper.com/flutterwave.aspx?ismobile=34",
      meta: {
        consumer_id: "<?php echo $id ?>",
        consumer_mac: "92a3-912ba-1192a",
      },
      customer: {
        email: "<?php echo $emailadd ?>",
        phone_number: "<?php echo $phonenum ?>",
        name: "<?php echo $fname." ".$oname." ".$lname ?>",
      },
      callback: function (data) {
        var reference = data.tx_ref;
        var amountpd = data.amount;
        var pdstatus = data.status;
      },
        $.ajax({
        url:'../backend/paystatus.php',
        method:'POST',
        data:{
            
            payref:reference,
            payamount:amountpd,
            paystatus:pdstatus
            
        },
      }),
    
      onclose: function() {
        // close modal
      },
      customizations: {
        title: "Hk Square Farms Investment Plan",
        description: "Payment of "+$("#payval").val()+" naira for "+$("#slots").val()+" investment slots",
        logo: "https://assets.piedpiper.com/logo.png",
      },
    }),
  })
  }
  </script>
  
<?php
include "../include/footer.php";
?>