<?php
include "../include/nav.php";
?>      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              
              <div class="col-12 col-md-6 col-lg-6 offset-3">
                <div class="card">
                  <form>
                    <div class="card-header">
                      <h4>Investment Withdrawal Form</h4>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <label>Select Investment</label>
                        <select type="text" class="form-control"  required="yes">
                            <option>Select Investment</option>

                        </select>
                        
                      </div>
                      <div class="form-group">
                        <label>Amount Invested</label>
                        <input type="text" class="form-control" disabled required="" value="&#8358;50,000">
                       
                      </div>
                      <div class="form-group">
                        <label>Maturity Date </label>
                        <input type="date" class="form-control" disabled required="" value="20/05/2021">
                        
                      </div>

                      <div class="form-group">
                        <label>Investment Status</label>
                        <select type="text" class="form-control"  required="yes">
                            <option>Investment Remarks</option>

                        </select>
                        
                      </div>
                    
                    </div>
                    <div class="card-footer text-right">
                    <button class="btn btn-primary" id="swal-2">Withraw</button>
                    <button class="btn btn-warning" id="swal-2">Cancel Request</button>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </section>
        <?php
include "../include/footer.php";
?>