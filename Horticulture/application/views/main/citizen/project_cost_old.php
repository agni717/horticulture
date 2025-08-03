<?php $this->load->view('common/header_citizen'); ?>   

      <div class="page-body-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 grid-margin mt-5 mx-auto">
                  <h4 class="card-title">Machinery Specification & Project Cost</h4>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <form class="form-sample">
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center mt-1">Plant & Machinery Specification</h5>
                              </div>
                           </div>
                           <div class="row cost-field">
                              <div class="col-lg-12">
                                 <div class="form-group form-row text-left mb-0">
                                    <div class="col-lg-11">
                                       <div class="row desk_label">
                                          <label class="col-lg-2 col-form-label px-1">Machine Name:</label>
                                          <label class="col-lg-2 col-form-label px-1">Manufacturer Name:</label>
                                          <label class="col-lg-1 col-form-label px-1">Serial No:</label>
                                          <label class="col-lg-2 col-form-label px-1">Model No:</label>
                                          <label class="col-lg-2 col-form-label px-1">Machine Type:</label>
                                          <label class="col-lg-1 col-form-label px-1">Cost:</label>
                                          <label class="col-lg-2 col-form-label px-1">Capacity:</label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="form-group form-row text-left">
                                    <div class="col-lg-11">
                                       <div class="row">
                                          <label class="col-lg-2 col-form-label mob_label px-1">Machine Name:</label>
                                          <div class="col-lg-2 px-1">
                                             <input type="text" class="form-control" />
                                          </div>
                                          <label class="col-lg-2 col-form-label mob_label px-1">Manufacturer Name:</label>
                                          <div class="col-lg-2 px-1">
                                             <input type="text" class="form-control" />
                                          </div>
                                          <label class="col-lg-1 col-form-label mob_label px-1">Serial No:</label>
                                          <div class="col-lg-1 px-1">
                                             <input type="text" class="form-control" />
                                          </div>
                                          <label class="col-lg-2 col-form-label mob_label px-1">Model No:</label>
                                          <div class="col-lg-2 px-1">
                                             <input type="text" class="form-control" />
                                          </div>
                                          <label class="col-lg-2 col-form-label mob_label px-1">Machine Type:</label>
                                          <div class="col-lg-2 px-1">
                                             <select class="form-control">
                                                <option selecte disabled>---Select---</option>
                                                <option>Imported</option>
                                                <option>Indigenous</option>
                                                <option>Assembled / Fabricated</option>
                                             </select>
                                          </div>
                                          <!-- <label class="col-lg-1 col-form-label mob_label px-1">Warenty:</label>
                                          <div class="col-lg-1 px-1">
                                             <input type="text" class="form-control" />
                                          </div> -->
                                          <label class="col-lg-1 col-form-label mob_label px-1">Cost:</label>
                                          <div class="col-lg-1 cost_field px-1">
                                             <input type="text" class="form-control" /><span>In Lakh</span>
                                          </div> 
                                          <label class="col-lg-2 col-form-label mob_label px-1">Capacity:</label>
                                          <div class="col-lg-2 px-1">
                                             <input type="text" class="form-control" />
                                          </div>
                                          <!-- <label class="col-lg-1 col-form-label mob_label px-1">Unit:</label>
                                          <div class="col-lg-1 px-1">
                                             <select class="form-control">
                                                <option selecte disabled>---Select---</option>
                                                <option>HP</option>
                                                <option>CC</option>
                                             </select>
                                          </div> -->
                                       </div>
                                    </div>
                                    <div class="col-lg-1">
                                       <input type="button" class="btn btn-primary" value="+" onclick="addRow()">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-12" id="DeleteRow"></div>
                           </div> 
                           <!-- <div id="newinput"></div> -->
                        </form>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-lg-12 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <form class="form-sample cost_field">
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Project Cost</h5>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Land & Buiding Cost:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" /><span>In Lakh</span>
                              </div>
                              <label class="col-lg-3 col-form-label">Plant and Machineries Cost:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" readonly /><span>In Lakh</span>
                              </div>
                           </div>
                           <div class="form-group form-row">                                
                              <label class="col-lg-3 col-form-label">Misc. Fixed Assets:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" /><span>In Lakh</span>
                              </div>
                              <label class="col-lg-3 col-form-label">Preli. & Pre-Operative Expenses:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" /><span>In Lakh</span>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Contingencies etc.:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" /><span>In Lakh</span>
                              </div>
                              <label class="col-lg-3 col-form-label">Working Capital Margin:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" /><span>In Lakh</span>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Others:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" /><span>In Lakh</span>
                              </div>
                              <label class="col-lg-3 col-form-label">Total Project Cost:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" readonly /><span>In Lakh</span>
                              </div>
                              <!-- <label class="col-lg-3 col-form-label">Working Capital:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" />
                              </div> -->
                           </div>
                           <div class="form-group form-row">                                
                              <!-- <label class="col-lg-3 col-form-label">Subsidy claimed under WBFCIS - 2021:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" value="0" readonly />
                              </div> -->
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-lg-12 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <form class="form-sample cost_field">
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mb-4 text-decoration-underline text-center">Means of Finance</h5>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Promoters' Contribution:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" /><span>In Lakh</span>
                              </div>
                              <label class="col-lg-3 col-form-label">Term loan from bank / F.I.:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" /><span>In Lakh</span>
                              </div>
                           </div>
                           <div class="form-group form-row">                                
                              <label class="col-lg-3 col-form-label">Others:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" /><span>In Lakh</span>
                              </div>
                              <label class="col-lg-3 col-form-label">Total Means of Finance:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" readonly /><span>In Lakh</span>
                              </div>
                           </div>                           
                        </form>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-lg-12 grid-margin mx-auto">
                  <div class="card">
                     <div class="card-body">
                        <form class="form-sample cost_field">
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Working Capital:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" />
                              </div>
                              <label class="col-lg-3 col-form-label">Subsidy claimed under WBFCIS - 2021:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" value="0" readonly />
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mt-1 mb-2 text-decoration-underline text-center">Proposed no of Employment Generated (Indirect)</h5>
                              </div>
                           </div>                           
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Male:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" />
                              </div>
                              <label class="col-lg-3 col-form-label">Female:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" />
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <div class="col-lg-12">
                                 <h5 class="w-100 d-block mt-1 mb-2 text-decoration-underline text-center">Proposed no of Employment Generated (Direct)</h5>
                              </div>
                           </div>
                           <div class="form-group form-row">
                              <label class="col-lg-3 col-form-label">Male:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" />
                              </div>
                              <label class="col-lg-3 col-form-label">Female:</label>
                              <div class="col-lg-3">
                                 <input type="text" class="form-control" />
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12 text-right">
                                 <a class="btn btn-primary mb-2" href="documents_list.php" role="button">Next</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <?php $this->load->view('common/footer'); ?>