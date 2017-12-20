<?php get_header(); 

	$url1 = $_SERVER['SERVER_NAME']; 
	$url2 = $_SERVER ['REQUEST_URI'];
	$url2final = explode('?', $url2);
	$urlPage = 'http://' . $url1 . $url2final[0];
?>
<style>
	body{
		background: #212121;
		height: 100vh
	}
	
	#contador{		
		width: 100%;		
		height: 130px;
		position: relative;
		top: 30%;
		text-align: center;
		margin-top: -40px
	}
	.center{
		min-width: max-content;
		margin: auto;
		width: 532px;
		display: block;
		height: 130px;
	}
	h2, p{
    	font-family: AntennaBold;
		color: #fff;
		font-size: 73px
	}
	p{    	
		font-size: 22px;
		margin-top: 20px
	}
	.dias, .horas, .min, .seg{
		float: left;
		text-align: center;
		width: 118px;
	}
	.dias{
		margin-right: 60px;
	}
	img{
		position: relative;
		top: 42%;
		margin-top: -76px;
		margin: 0 auto;
		clear: both;
		display: block;
	}
	@media (max-width: 980px) {
		#contador{
			width: 100%
		}
		.center{
			width: 312px
		}
		.dias, .horas, .min, .seg{
			width: 70px
		}
		.dias {
			margin-right: 30px;
		}
		h2{		
			font-size: 43px;
		}
		p {
			font-size: 18px	
		}
	}
</style>
<!-- Display the countdown timer in an element -->

<div id="contador">
	<div class="center">
		<div class="dias">
			<h2></h2>
			<p></p>
		</div>
		<div class="horas">
			<h2></h2>
			<p></p>
		</div>
		<div class="min">
			<h2></h2>
			<p></p>
		</div>
		<div class="seg">
			<h2></h2>
			<p></p>
		</div>
	</div>
</div>

<img src="<?php echo $urlAtual ?>/wp-content/themes/monashees-theme/imgs/logo_contador.png" alt="">	

<script>
// Set the date we're counting down to
var countDownDate = new Date("Dec 4, 2017 18:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  jQuery('.dias h2').text('0'+days);
  jQuery('.dias p').text('Dias');
  jQuery('.horas h2').text(hours+':');
  jQuery('.horas p').text('Horas');
  jQuery('.min h2').text(minutes+':');
  jQuery('.min p').text('Min');
  jQuery('.seg h2').text(seconds);
  jQuery('.seg p').text('Seg');
//   document.getElementById("demo").innerHTML = days + "Dias " + hours + "Horas "
//   + minutes + "Min " + seconds + "Seg ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("contador").innerHTML = "<h2>SITE NO AR</h2>";
  }
}, 1000);
</script>




