// $(document).ready(function(){
//    // $("#rowAdder").click(function(){
//    //    $("#DeleteRow").clone().appendTo("#cost-field");
//    // });
//    alert('hiii');

//    var addCount = 1;
//    console.log(addCount);
// });


function addRow () {
  document.querySelector('#DeleteRow').insertAdjacentHTML(
    'afterbegin',
    `<div class="form-group form-row text-left">
         <div class="col-lg-11">
            <div class="row">
               <label class="col-lg-2 px-1 col-form-label mob_label">Machine Name:</label>
               <div class="col-lg-2 px-1">
                  <input type="text" class="form-control" />
               </div>
               <label class="col-lg-2 px-1 col-form-label mob_label">Manufactirer Name:</label>
               <div class="col-lg-2 px-1">
                  <input type="text" class="form-control" />
               </div>
               <label class="col-lg-1 px-1 col-form-label mob_label">Serial No:</label>
               <div class="col-lg-1 px-1">
                  <input type="text" class="form-control" />
               </div>
               <label class="col-lg-2 px-1 col-form-label mob_label">Model No:</label>
               <div class="col-lg-2 px-1">
                  <input type="text" class="form-control" />
               </div>
               <label class="col-lg-2 px-1 col-form-label mob_label">Machine Type:</label>
               <div class="col-lg-2 px-1">
                  <select class="form-control">
                     <option selecte disabled>---Select---</option>
                     <option>Imported</option>
                     <option>Indigenous</option>
                     <option>Assembled / Fabricated</option>
                  </select>
               </div>               
               <label class="col-lg-1 px-1 col-form-label mob_label">Cost:</label>
               <div class="col-lg-1 px-1 cost_field">
                  <input type="text" class="form-control" /><span>In Lakh</span>
               </div>
               <label class="col-lg-2 px-1 col-form-label mob_label">Capacity:</label>
               <div class="col-lg-2 px-1">
                  <input type="text" class="form-control" />
               </div>               
            </div>
         </div>
         <div class="col-lg-1" onclick="removeRow(this)">
            <input type="button" class="btn-danger btn" value="-">
         </div>
    </div>`      
  )
}

function removeRow (input) {
  input.parentNode.remove()
}

// select-option
$(document).ready(function(){
   $('.select_capacity').change(function(){
      if($('select.select_capacity option:selected').text() == "Existing"){
      $('label.existing_capacity').show();
      }
      else{
      $('label.existing_capacity').hide();
      };
      if($('select.select_capacity option:selected').text() == "Proposed"){
      $('label.prop_capacity').show();
      }
      else{
      $('label.prop_capacity').hide();
      }
   })
});

// Existing industry

//    function addRow2 () {
//   document.querySelector('#DeleteRow2').insertAdjacentHTML(
//     'afterbegin',
//     `<div class="col-lg-12">
//          <div class="form-group">
//             <div class="form-row">
//                <label class="col-lg-3 col-form-label">Existing Industry:</label>
//                <div class="col-lg-3">
//                   <div class="custom-control custom-radio custom-control-inline">
//                      <input type="radio" class="custom-control-input" onclick="javascript:yesnoCheck2();" name="yesno2" id="yesCheck2" value="customEx">
//                      <label class="custom-control-label" for="yesCheck2">Yes</label>
//                   </div>
//                   <div class="custom-control custom-radio custom-control-inline">
//                      <input type="radio" class="custom-control-input" onclick="javascript:yesnoCheck2();" name="yesno2" id="noCheck2" value="customEx">
//                      <label class="custom-control-label" for="noCheck2">No</label>
//                   </div>
//                </div>
//             </div>
//          </div>
//          <div class="form-group" id="ifYes2" style="display:none">
//             <div class="form-row">
//                <label class="col-lg-3 col-form-label"> Existing Industry Name: </label>
//                <div class="col-lg-3">
//                   <input type="text" class="form-control" name="industry_name"  placeholder="" Required />
//                </div>
//                <label class="col-lg-3 col-form-label"> Existing Industry Location: </label>
//                <div class="col-lg-3">
//                   <input type="text" class="form-control" name="location"  placeholder="" Required/>
//                </div>
//                <label class="col-lg-3 col-form-label mt-4"> Product of Existing Industry: </label>
//                <div class="col-lg-3 mt-4">
//                   <input type="text" class="form-control" name="industry_product"  placeholder="" Required />
//                </div>
//                <label class="col-lg-3 col-form-label mt-4"> Address1: </label>
//                <div class="col-lg-3 mt-4">
//                   <input type="text" class="form-control" name="Address"  placeholder="" Required />
//                </div>
//                <label class="col-lg-3 col-form-label mt-4"> Sub Division: </label>
//                <div class="col-lg-3 mt-4">
//                   <input type="text" class="form-control"  name="Sub_Division"  placeholder="" Required />
//                </div>
//                <label class="col-lg-3 col-form-label mt-4"> Block: </label>
//                <div class="col-lg-3 mt-4">
//                   <input type="text" class="form-control" name="Block"  placeholder="" Required />
//                </div>
//                <label class="col-lg-3 col-form-label mt-4"> Police Station:</label>
//                <div class="col-lg-3 mt-4">
//                   <input type="text" class="form-control" name="Police_Station"  placeholder="" Required />
//                </div>
//                <label class="col-lg-3 col-form-label mt-4"> Pincode:</label>
//                <div class="col-lg-3 mt-4">
//                   <input type="text" class="form-control" name="Pincode"  placeholder="" Required />
//                </div>
//             </div>
//          </div>
//          <div class="col-lg-1" onclick="removeRow(this)">
//             <input type="button" class="btn-danger btn" value="-">
//          </div>
//       </div>`      
//   )
// }






// radio-industry
function yesnoCheck() {
   if (document.getElementById('yesCheck').checked)
   {
      document.getElementById('ifYes').style.display = 'block';                
   }
   else document.getElementById('ifYes').style.display = 'none';
}

function yesnoCheck2() {
   if (document.getElementById('yesCheck2').checked)
   {
      document.getElementById('ifYes2').style.display = 'block';                
   }
   else document.getElementById('ifYes2').style.display = 'none';
}

function yesnoCheck4() {
   if (document.getElementById('yesCheck3').checked)
   {
      document.getElementById('ifYes3').style.display = 'block';                
   }
   else document.getElementById('ifYes3').style.display = 'none';
}

// show-remarks
$(document).ready(function(){
   $(".approve-btn").click(function(){
      $(".approve-remarks").show();
      $(".reject-remarks").hide();
      $(".revert-remarks").hide();
   });
   $(".reject-btn").click(function(){
      $(".reject-remarks").show();
      $(".approve-remarks").hide();
      $(".revert-remarks").hide();
   });
   $(".revert-btn").click(function(){
      $(".approve-remarks").hide();
      $(".revert-remarks").show();
      $(".reject-remarks").hide();
   });
});

   




