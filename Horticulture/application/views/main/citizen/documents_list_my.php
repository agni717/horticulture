<?php $this->load->view('common/header_citizen.php'); ?>   

      <div class="page-body-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 grid-margin mt-4 mx-auto">
                  <h4 class="card-title">List of Documents</h4>
               </div>
            </div>
            <?php
            $attributes = array('name' => 'frmDoc', 'id' => 'frmDoc','enctype'=>'multipart/form-data'); 
            echo form_open('applicant/documents_list',$attributes);?>
            <div class="row">
               <div class="col-lg-12 grid-margin">
                  <div class="card">
                     <div class="card-body">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                <th rowspan="2">Sl. No.</th>
                                <th rowspan="2">Document Description</th>
                                <th colspan="2">Whether Submitted</th>
                                <th rowspan="2">Upload Document</th>
                              </tr>
                              <tr>                                
                                <th>Yes</th>
                                <th>No</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>1</td>
                                 <td>Prescribed format application (Annexure-1)</td>
                                 <td>
                                    <input type="radio" name="is_submitted_annexure1" value="Yes" checked>
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_annexure1" value="No">
                                 </td>
                                 <td>
                                    <input type="file" id="myFile1" name="file_annexure1">
                                 </td>
                              </tr>
                              <tr>
                                 <td>2</td>
                                 <td>Detailed Project Report (DPR)</td>
                                 <td>
                                    <input type="radio" name="is_submitted_dpr" value="Yes" checked>
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_dpr" value="No">
                                 </td>
                                 <td>
                                    <input type="file" id="file_dpr" name="file_dpr">
                                 </td>
                              </tr>
                              <tr>
                                 <td>3</td>
                                 <td>Sanction letter of term loan from Bank / Financial Institution</td>
                                 <td>
                                    <input type="radio" id="yes3" name="is_submitted_sanction_letter_of_term_loan" value="Yes" checked>
                                 </td>
                                 <td>
                                    <input type="radio" id="no3" name="is_submitted_sanction_letter_of_term_loan" value="No">
                                 </td>
                                 <td>
                                    <input type="file" id="myFile3" name="file_sanction_letter_of_term_loan">
                                 </td>
                              </tr>
                              <tr>
                                 <td>4</td>
                                 <td>Appraisal Report from Bank / Financial Institution</td>
                                 <td>
                                    <input type="radio" name="is_submitted_appraisal_report" value="Yes" checked>
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_appraisal_report" value="No">
                                 </td>
                                 <td>
                                    <input type="file" id="file_appraisal_report" name="file_appraisal_report">
                                 </td>
                              </tr>
                              <tr>
                                 <td rowspan="3">5</td>
                                 <td>(i) Certificate of Incorporation / Registration of Organization</td>
                                 <td>
                                    <input type="radio" name="is_submitted_certificate_of_incorporation" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_certificate_of_incorporation" value="No">
                                 </td>
                                 <td><input type="file" id="file_certificate_of_incorporation" name="file_certificate_of_incorporation"></td>
                              </tr>
                              <tr>
                                 <td>(ii) a. Memorandum / Articles of Association / Bye-laws of Society</td>
                                 <td>
                                    <input type="radio" name="is_submitted_memorandum_of_association" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_memorandum_of_association" value="No">
                                 </td>
                                 <td><input type="file" id="file_memorandum_of_association" name="file_memorandum_of_association"/></td>
                              </tr>
                              <tr>
                                 <td>&nbsp; &nbsp; &nbsp; b. Partnership Deed</td>
                                 <td>
                                    <input type="radio" name="is_submitted_partnership_deed" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_partnership_deed" value="No">
                                 </td>
                                 <td><input type="file" id="file_partnership_deed" name="file_partnership_deed"/></td>
                              </tr>
                              <tr>
                                 <td>6</td>
                                 <td>Bio-data / Background of Directors / promoters</td>
                                 <td>
                                    <input type="radio" name="is_submitted_bio_data" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_bio_data" value="No">
                                 </td>
                                 <td><input type="file" name="file_bio_data" id="file_bio_data" /></td>
                              </tr>
                              <tr>
                                 <td>7</td>
                                 <td>Annual Reports Audited Statements for the last three years (in case of expansion project only)</td>
                                 <td>
                                    <input type="radio" name="is_submitted_annual_reports_audited_statement" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_annual_reports_audited_statement" value="No">
                                 </td>
                                 <td><input type="file" id="file_annual_reports_audited_statement" name="file_annual_reports_audited_statement" /></td>
                              </tr>                              
                              <tr>
                                 <td>8</td>
                                 <td>Land Porcha (ROR)</td>
                                 <td>
                                    <input type="radio" name="is_submitted_land_porcha" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_land_porcha" value="No">
                                 </td>
                                 <td><input type="file" id="file_land_porcha" name="file_land_porcha" /></td>
                              </tr>
                              <tr>
                                 <td>9</td>
                                 <td>Blueprint of building plan Trade License Document</td>
                                 <td>
                                    <input type="radio" name="is_submitted_blueprint_building_plan" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_blueprint_building_plan" value="No">
                                 </td>
                                 <td><input type="file" id="file_blueprint_building_plan" name="file_blueprint_building_plan" /></td>
                              </tr>
                              <tr>
                                 <td>10</td>
                                 <td>Trade License Document</td>
                                 <td>
                                    <input type="radio" name="is_submitted_trade_licence" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_trade_licence" value="No">
                                 </td>
                                 <td><input type="file" id="file_trade_licence" name="file_trade_licence" /></td>
                              </tr>
                              <tr>
                                 <td>11</td>
                                 <td>Land documents / Registered lease deed in case of leased land</td>
                                 <td>
                                    <input type="radio" name="is_submitted_land_deed" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_land_deed" value="No">
                                 </td>
                                 <td><input type="file" id="file_land_deed" name="file_land_deed" /></td>
                              </tr>
                              <tr>
                                 <td>12</td>
                                 <td>Chartered Engineer (Civil) Certificate of item and cost-wise details of the Technical Civil Work envisaged</td>
                                 <td>
                                    <input type="radio" name="is_submitted_certificate_of_item" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_certificate_of_item" value="No">
                                 </td>
                                 <td><input type="file" id="file_certificate_of_item" name="file_certificate_of_item" /></td>
                              </tr>
                              <tr>
                                 <td>13</td>
                                 <td>Chartered Engineer (Mechanical) / Certificate District Engineer, Zilla Parishad Certificate mentioning item and cost wise details of the Plant and Machineries envisaged / installed, etc.</td>
                                 <td>
                                    <input type="radio" name="is_submitted_chartered_engineer" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_chartered_engineer" value="No">
                                 </td>
                                 <td><input type="file" name="file_chartered_engineer" id="file_chartered_engineer" /></td>
                              </tr>
                              <tr>
                                 <td>14</td>
                                 <td>Quotations of prices of plant and machineries and equipments etc. required for the project</td>
                                 <td>
                                    <input type="radio" name="is_submitted_quotations_of_prices" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_quotations_of_prices" value="No">
                                 </td>
                                 <td><input type="file" name="file_quotations_of_prices" id="file_quotations_of_prices" /></td>
                              </tr>
                              <tr>
                                 <td rowspan="2">15</td>
                                 <td>(i) Marketing Strategy</td>
                                 <td>
                                    <input type="radio" name="is_submitted_marketing_strategy" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio" name="is_submitted_marketing_strategy" value="No">
                                 </td>
                                 <td><input type="file" name="file_marketing_strategy" id="file_marketing_strategy" /></td>
                              </tr>
                              <tr>
                                 <td>(ii) Process Flow Diagram</td>
                                 <td>
                                    <input type="radio"  name="is_submitted_process_flow_diagram" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio"  name="is_submitted_process_flow_diagram" value="No">
                                 </td>
                                 <td><input type="file" name="file_process_flow_diagram" id="file_process_flow_diagram" /></td>
                              </tr>
                              <tr>
                                 <td>16</td>
                                 <td>Implementation Schedule (dates of acquiring land start of construction of building / completion of building / placing order for plant and machinery / installation / erection / trial run / trial production / start of commercial production / running)</td>
                                 <td>
                                    <input type="radio"  name="is_submitted_implementation_schedule" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio"  name="is_submitted_implementation_schedule" value="No">
                                 </td>
                                 <td><input type="file" name="file_implementation_schedule" id="file_implementation_schedule" /></td>
                              </tr>
                              <tr>
                                 <td>17</td>
                                 <td>An affidavit duly executed on non-judicial stamp paper of Rs.100/- or more duly notarized by Notary Public affirming that : <br>The organization has not obtained / applied for or will not obtain any grant / subsidy from any Ministry / Department of Central Govt. / GOI organization / agencies and State Govt. for the same purpose / activity / same components. If yes, the details thereof.</td>
                                 <td>
                                    <input type="radio"  name="is_submitted_affidavit" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio"  name="is_submitted_affidavit" value="No">
                                 </td>
                                 <td><input type="file" name="file_submitted_affidavit" id="file_submitted_affidavit" /></td>
                              </tr>
                              <tr>
                                 <td>18</td>
                                 <td>Bank Certificate certifying release of 50% of term loan and no objection to release of 1st instalment of grant</td>
                                 <td>
                                    <input type="radio"  name="is_submitted_bank_certificate" value="Yes">
                                 </td>
                                 <td>
                                    <input type="radio"  name="is_submitted_bank_certificate" value="No">
                                 </td>
                                 <td><input type="file" name="file_submitted_bank_certificate" id="file_submitted_bank_certificate" /></td>
                              </tr>
                              <tr>
                                 <td colspan="5"><strong>Note : </strong>Hardcopy of all documents to be submitted in respective district office.</td>
                              </tr>
                           </tbody>
                        </table>
                        <div class="row">
                           <div class="col-lg-12 text-right">
                              <button type="submit" class="btn btn-primary my-2" >Submit</button>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </form>
            <!-- <div class="row">
               <div class="col-lg-12 grid-margin">
                  <div class="card">
                     <div class="card-body">
                        <form class="form-sample">
                           <div class="form-group row">
                              <label class="col-lg-3 col-form-label">Prescribed format application:</label>
                              <div class="col-lg-3">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile">  
                                    <label class="custom-file-label" for="customFile"></label>                 
                                 </div>
                              </div>
                              <label class="col-lg-3 col-form-label">Detailed Project Report (DPR):</label>
                              <div class="col-lg-3">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile2">
                                    <label class="custom-file-label" for="customFile"></label>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-lg-3 col-form-label">Sanction letter of term loan from Bank / Financial Institution:</label>
                              <div class="col-lg-3">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile3">
                                    <label class="custom-file-label" for="customFile"></label>
                                 </div>
                              </div>
                              <label class="col-lg-3 col-form-label">Appraisal Report from Bank/Financial Institution:</label>
                              <div class="col-lg-3">
                                 <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile4">
                                    <label class="custom-file-label" for="customFile"></label>
                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-lg-12 text-right">
                                 <a type="submit" class="btn btn-primary my-2" href="#">Submit</a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div> -->
         </div>
      </div>

      <?php $this->load->view('common/footer.php'); ?>