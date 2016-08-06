
<body>	
<section id="inner-headline">
<div class="container">
	<h2 class="pageTitle text-center">Dashboard</h2>
	</div>
	</section>
<div class="container">

<strong><h4>Hotels</h4></strong> 
<div class="panel panel-default">
  <div class="panel-heading col-xs-12">

    <h5 class="text-center col-xs-2">Name</h5>
    <h5 class="text-center col-xs-2">Address</h5>
    <h5 class="text-center col-xs-2">City</h5>
    <h5 class="text-center col-xs-2">Open date</h5>

   </div>
  <div class="panel-body">
      <?php foreach ($hotel as $key => $value) { ?>
        
          <div class="col-xs-2  text-center"><label class="control-label"><?php echo $value['HotelDetail']['name'];?></label></div>
          <div class="col-xs-2  text-center"><label class="control-label"><?php echo $value['HotelDetail']['add'];?></label></div>
          <div class="col-xs-2  text-center"><label class="control-label"><?php echo $value['HotelDetail']['city'];?></label></div>
          <div class="col-xs-2  text-center"><label class="control-label"><?php echo $value['HotelDetail']['created'];?></label></div>
         
          <div class="clearfix"></div>
      <?php } ?>
  </div>
</div>
</div>
<style type="text/css">
  
  .m-l-3{
    margin-left: 30%;
  }
  .m-l-6{
    margin-left: 6%;
  }
  .m-r-6{
    margin-right: 6%;
  }
  .m-r-10{
    margin-right: 10%;
  }
  .m-r-20{
    margin-right: 20%;
  }
  .m-b-3{
    margin-bottom: 3%;
  }
  .m-b-6{
    margin-bottom: 6%;
  }
</style>
        
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>
<!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="giveHelp" class="modal fade" role="dialog">
  <div class="modal-dialog modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Give Help</h4>
      </div>
     				 <div class="modal-body well ">

					      <form method="POST" action="" data-toggle="validator" novalidate="novalidate">
                          <div class="row">
					        <div class="form-group control-group col-xs-5 pull-left">
					            <label for="amount" class="control-label">Select Amount</label>
								<select class="form-control " id="sel1">
								<?php foreach ($amounts as $key => $value) { ?>
								<option><?php echo $value['Amount']['give_help_amount'];?></option>
								<?php } ?>
								</select>
							</div>

							<div class=" pull-right  m-r-t ">
					        <button type="submit" class="btn btn-default btn-primary" data-dismiss="modal" onclick="giveHelpSubmit();">Submit</button>
					      </div>
                          </div>
					      <div class="modal-footer btn-footer padding-0">
					        <button type="button" class="btn btn-default btn-primary pull-left" data-dismiss="modal">Close</button>
					      </div>
					      </form>

					      </div>
					      
 

  </div>

</div>
<div id="getHelp" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Get Help</h4>
      </div>
      <div class="modal-body well ">

                          <form method="POST" action="" data-toggle="validator" novalidate="novalidate">
                          <div class="row">
                            <div class="form-group control-group col-xs-5 pull-left">
                                <label for="amount" class="control-label">Select Amount</label>
                                <select class="form-control " id="sel2">
                                <?php foreach ($amounts as $key => $value) { ?>
                                <option><?php echo $value['Amount']['get_help_amount'];?></option>
                                <?php } ?>
                                </select>
                            </div>

                            <div class=" pull-right  m-r-t ">
                            <button type="submit" class="btn btn-default btn-primary" data-dismiss="modal" onclick="getHelpSubmit();">Submit</button>
                          </div>
                          </div>
                          <div class="modal-footer btn-footer padding-0">
                            <button type="button" class="btn btn-default btn-primary pull-left" data-dismiss="modal">Close</button>
                          </div>
                          </form>

                          </div>
                          
      
    </div>

  </div>

</div>
<?php echo $this->element('bankForm'); ?>
<style type="text/css">
	
	#inner-headline {
    background: #e7e7e7 url("<?php echo ABSOLUTE_URL;?>/img/border-bg.jpg") repeat-x scroll left top;
    border-bottom: 1px solid #cbcbcb;
    color: #358a22;
    height: 80px;
    margin: 0 0 25px;
    padding: 12px 0;
    position: relative;
}
.padding-0{
    padding: 0px 0px 0px;
}
.m-r-r-10{
  margin-right: 10% !important;
}
.m-r-l-10{
    margin-left: 10% !important;
}

.margin-bottom-10{
  margin-bottom: 10%;
  height: 10% !important;
}
.padding-top-10{
   margin-top: 20px;
}
.btn-footer{
    border-top: 0px solid #e5e5e5;
    margin-top: 0px;
    padding: 0px 2px 0px;
    text-align: center;
}
.remove-border{
  border-bottom: 0px solid #e5e5e5;
}
.cardType{
    box-shadow: 0 3px 5px #c9c9c9;
    border-radius: 20px !important;
}
</style>
<script type="text/javascript">
	function giveHelpSubmit(){
		var optn = $("#sel1").val();
		$.ajax({
            url:'<?php echo ABSOLUTE_URL;?>/desh_board/giveHelp/'+optn,
            method:'post',
            data: {amount:optn},
            success: function (data) {
                alert("Your request submitted successfully");
            },
            error: function (){
                alert('Something went wrong..');
            }
        });
	}
    function getHelpSubmit() {
        var optn = $("#sel2").val();
        $.ajax({
            url:'<?php echo ABSOLUTE_URL;?>/desh_board/getHelp/',
            method:'post',
            data: {amount:optn},
            success: function (data) {
                alert("Your request submitted successfully");
            },
            error: function (){
                alert('Something went wrong..');
            }
        });
    }
    <?php if ($this->params['url']['bankDetails'] == 1) { ?>
        
          alert("Thanks to update your bank details");
          window.location = "<?php echo ABSOLUTE_URL?>"+ "/home_pages/deshBoard/";
     
    <?php } ?>



</script>