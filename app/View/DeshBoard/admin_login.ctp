
<body>	
<section id="inner-headline">
<div class="container">
	<h2 class="pageTitle text-center">Wellcome Admin</h2>
	</div>
	</section>
<div class="container">

<?php foreach ($hotels as $key => $value) {
 pr($value);
} ?>
</div>

        
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

</body>

<style type="text/css">
.m-b-3{
    margin-bottom: 3%;
  }
  #inner-headline {
    background: #e7e7e7 url("<?php echo ABSOLUTE_URL;?>/img/border-bg.jpg") repeat-x scroll left top;
    border-bottom: 1px solid #cbcbcb;
    color: #358a22;
    height: 80px;
    margin: 0 0 25px;
    padding: 12px 0;
    position: relative;
}
</style>