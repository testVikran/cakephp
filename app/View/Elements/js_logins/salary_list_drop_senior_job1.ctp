<?php
$styCurrTxt = "float:left;padding-right:7px; padding-top:2px;";
              $styDropTxt = "width:183px;";
              $styDropClass = "input";
              $stylclassTxt="flt";
              if(isset($came) && $came=='confirmdetails'){

                  $styCurrTxt = "padding-right:12px;";
                  $stylclassTxt="toploginpaneleft flt";
                  $styDropTxt = "width:183px;";
                  $styDropClass = "fieldlines";

              }
?>
<!-- <input type="text" id="countryCode_value" value="<?php //echo $PloginRegister;?>" />             -->

              <div  class="<?php echo $stylclassTxt; ?>"> INR  </div>
              <?php

              
              if(isset($incReg) && $incReg==1){ 
                    echo $this->Form->input('master_lakh_id',array('type'=>'select','empty'=>'-Lakh-','id'=>'master_thousand_id','style'=>$styDropTxt,'class'=> $styDropClass,'options'=>$PloginRegister['MasterLakh'],'onchange'=>'change_salary();', 'label'=>false ,'div'=>false,'error'=>false,'onblur'=>'regTracks(this.id);'));
              }else{
                    echo $this->Form->input('master_lakh_id',array('type'=>'select','empty'=>'-Lakh-','id'=>'master_thousand_id','style'=>$styDropTxt,'class'=> $styDropClass,'options'=>$PloginRegister['MasterLakh'],'onchange'=>'change_salary();showLimitiedAccesspopup(this);', 'label'=>false ,'div'=>false,'error'=>false));
              }
              ?>
            
            

