<script src="<?=base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?=base_url('assets/js/bootstrap.js');?>"></script>
<script type="text/javascript">
	//add active class to clicked sidebar iteam
	$(function () {
	    $('#menu a').filter(function () { return this.href == location.href }).parent().addClass('active').siblings().removeClass('active')
	    $('#menu a').click(function () {
	        $(this).parent().addClass('active').siblings().removeClass('active')
	    })
	})
</script>
<script type="text/javascript" src="<?=base_url('assets/js/seller.js');?>"></script>
 <?php 
	switch ($data['page']):
			case 'my-ads':
 ?>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/6.1.0/jquery.mark.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	var table = $('#example').DataTable();
	table.on("draw",function() {
	    var keyword = $('#example_filter > label:eq(0) > input').val();
	    // clear all the previous highlighting
	    $('#example').unmark();
	    // highlight the searched word
	    $('#example').mark(keyword,{});
	});
});
</script>
 <?php break; ?>
<?php endswitch; ?>
</body>
</html>
