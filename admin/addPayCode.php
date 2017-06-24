<?php
require_once '_main.php';
require_once '../lib/setting.php'
?>
<div class="content-wrapper">
            <!-- left column -->
        <section class="content-header">
            <h1>
				添加充值卡<small>Add code</small>
            </h1>
        	</section>
        <section class="content">

	        <div class="row">
	            <div class="col-md-6">
		            <div class="box box-primary">
		        		<div class="box-header">
			                <i class="fa fa-plus"></i>
			                <h3 class="box-title">添加充值卡</h3>
		            	</div>
			            <div class="box-body">
				             <div class="form-group">
 					             <label for="cate_title">选择类型</label>
					             <select class="form-control" id="type">
					             	<?php
					             		foreach(array_keys($goods) as $key){
					             			echo "<option value=".$key.">".$key." RMB "."-- ".$goods[$key]." GB"."</option>";
					             		}
					             	?>
							    </select>

					             <label for="cate_title">数量</label>
					             <select class="form-control" id="total">
					             	 <option>30</option>
					             	 <option>50</option>
					             	 <option>100</option>
							    </select>
				            </div>

			                <div class="box-footer">
								<button id="addPayCode" class="btn btn-primary">添加</button>
				            </div>
			            </div>
		            </div>
	            </div>
			</div>
        </section>
</div>
<script src="../asset/js/jQuery.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="../asset/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		function addPayCode(){
			$.ajax({
				type:"POST",
				url:'_addPayCode.php',
				data:{
					'type':$("#type").val(),
					'total':$("#total").val()
				},
				success:function(data){
					alert("添加成功!");
					self.location='download.php?path='+data;
				},
	            error:function(jqXHR){
	                alert("发生错误："+jqXHR.status);
                }
			});
		}
		$("#addPayCode").click(function(){
			addPayCode();
		});
	});

</script>
<?php
require_once '_footer.php'; ?>