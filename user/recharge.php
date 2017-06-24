<?php
	require_once '_main.php';
?>
<!--充值卡兑换-->
<div class="content-wrapper">
            <!-- left column -->

            <section class="content-header">
            <h1>
				流量兑换<small>Recharge</small>
            </h1>
        	</section>
        <section class="content">
        <div class="row">
            <div class="col-md-6">
            <div class="box box-primary">
        		<div class="box-header">
	                <i class="fa fa-exchange"></i>
	                <h3 class="box-title">兑换</h3>
            	</div>
	            <div class="box-body">
		             <div class="form-group">
			             <label for="cate_title">输入充值卡号</label>
			             <input id="input" class="form-control" name="payCode" >
		            </div>

	                <div class="box-footer">
						<button id="rechBtn" type="submit" class="btn btn-primary">兑换</button>
		            </div>
	            </div>
            </div>
            </div>
		</div>
        </section>
</div>
<script src="../asset/js/jQuery.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<!-- <script src="../asset/js/bootstrap.min.js" type="text/javascript"></script> -->
<!-- iCheck -->
<!-- <script src="../asset/js/icheck.min.js" type="text/javascript"></script> -->
<script>
    $(document).ready(function(){
        function recharge(){
            $.ajax({
                type:"POST",
                url:"_recharge.php",
                dataType:"json",
                data:{
                    payCode:$("#input").val()
                },
                success:function(data){
                    alert(data['msg']);
                },
                error:function(jqXHR){
                    alert("发生错误："+jqXHR.status);
                }
            });
        }
       $("#html").keydown(function(event){
            if(event.keyCode==13){
                recharge();
            }
       });
       $("#rechBtn").click(function(){
                recharge();
       });
       
    });
</script>

<?php
require_once '_footer.php'; 
?>