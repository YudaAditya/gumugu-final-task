<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="<?php echo base_url('theme/bootstrap/js/bootstrap.js') ?>"></script>
<script src="<?php echo base_url('theme/bootstrap/js/bootstrap.bundle.js') ?>"></script>
<script src="<?php echo base_url('theme/js/jquery-3.4.1.min.js') ?>"></script>
<script src="<?php echo base_url('theme/datepicker/js/bootstrap-datepicker.js')?> "></script>
<script type="text/javascript" src="<?php echo base_url('theme/chartjs/chart.min.js')?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.created').datepicker({
            format: "yyyy-mm-dd",
            autoclose:true
        });

        $('.expired').datepicker({
            format: "yyyy-mm-dd",
            autoclose:true
        });
    });

    $(document).ready(function(){
		window.setInterval(function () {
			var sisawaktu = $("#waktu").html();
			sisawaktu = eval(sisawaktu);
			if (sisawaktu == 0) {
                // $("#waktu").load("<?php echo base_url()?>homepage/bawah");   
                $('#interval').load("<?php echo site_url('homepage/bawah');?>")
                // load("<?php echo base_url()?>homepage/bawah");
				// location.href = "https://www.gumugu.com/?source=final&medium=homepage-footer&campaign=contoh";
			} else {
				$("#waktu").html(sisawaktu - 1);
			}
		}, 1000);
	});
</script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $keyword; ?>],
            datasets: [{
                label:'Data Search',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>

