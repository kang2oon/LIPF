<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep1 clearfix">
			<a href="javascript:void(0);" class="back"><span></span></a>
			마음 날씨
			<div class="notiwrap">
				<div class="noti"><span>5</span></div>
			</div>
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc">
			<div class="weather_tit">오늘의 마음 날씨</div>
			<hr class="dp2" />
			<div class="weather_wrapper clearfix">
				<div class="weather_ico"><img src="images/weather/thunder.svg"></div>
				<div class="weather_point">
					<div class="label">"흐림"</div>
					<div class="point"><strong>50점</strong> / 100점</div>
					<div class="last">최신 100건</div>
				</div>
			</div>
			<div class="weather_tit">주간 마음 날씨</div>
			<hr class="dp2" />
			<div class="chart_wrapper"><canvas id="htweather"></canvas></div>
		</div>
	</div>
</div>
    
<?php include 'inc/footer.php'; ?>