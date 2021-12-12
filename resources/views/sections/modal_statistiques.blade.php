<!-- Modal -->
<div class="modal fade" id="statistiques" role="dialog" data-backdrop="true">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title"><b>Estadisticas del Sorteo !</b></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="text-align: center;">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body">
                            <canvas id="myChart"></canvas>
                            <script src="chart.js"></script>
                            <script>
                                var ctx = document.getElementById('myChart').getContext('2d');
							var chart = new Chart(ctx, {
								type: 'doughnut',
								data:{
									datasets: [{
										data: [60,18,10, 8, 4],
										backgroundColor: ['#42a5f5', 'red', 'green','blue','violet'],
										label: 'Comparacion de navegadores'}],
										labels: ['Google Chrome','Safari','Edge','Firefox','Opera']},
										options: {responsive: true}
									});
                            </script>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-style" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
