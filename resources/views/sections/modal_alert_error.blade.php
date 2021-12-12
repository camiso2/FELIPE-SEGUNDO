<div class="modal fade" id="alert_error" role="dialog" data-backdrop="true">
	<div class="modal-dialog modal-xs" >
		<!-- Modal content-->
		<div class="modal-content back-m" >
			<div class="modal-body" style="text-align: center;">
				<br>
				<div style="">
					<img src="/images/logo.png" alt="" class="fox" width="55%"><hr style="background-color: white">
				</div>
				<br>
				<h2 class="confirm">{{ session('alert_error') }}</h2>
				<button type="button" class="btn btn-ttc btn-style" style="background-color: #BD3247" onclick="moverseA()" >MODIFICAR DATOS</button>
				<script type="text/javascript">
					function moverseA() {
						location.hash = "#" + "form";
						$('#alert_error').modal('hide')
					}
				</script>
			</div>
		</div>
	</div>
</div>
