<!-- Modal -->

<div class="modal fade" id="alert_success" role="dialog" data-backdrop="true">
	<div class="modal-dialog modal-lg"  >
		<!-- Modal content-->
		<div class="modal-content back-m"  >
			<div class="modal-body" style="text-align: center;">
				<br>
				<div class="p-confirm">
					<!--<h1>Su participación fue recibida.</h1>
					<h1>¡Gracias!</h1>
					<h1># confirmacion 027</h1>-->
					<h2 class="confirm">{{ session('alert_success') }} </h2>
					<h2 class="confirm">{{ session('gracias') }} </h2>
					<h2 class="confirm">{{ session('code') }}</h2>
				</div>
				<br>
				<div class="box-a">
					<img src="/images/a1.png" alt="" ><hr style="background-color: white">
				</div>
				<h3 class="sbf-title color-1 box" ><img src="/images/a2.png"></h3>
				<button type="button" class="btn btn-ttc btn-style" style="background-color: #BD3247" onclick="moverseAs()">REGISTRAR MAS RECIBOS </button>
				<script type="text/javascript">
					function moverseAs() {
						location.hash = "#" + "form";
						$('#alert_success').modal('hide')
					}
				</script>
			</div>
		</div>
	</div>
</div>
