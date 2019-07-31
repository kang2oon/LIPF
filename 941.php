<?php 
	include 'inc/header.php'; 

	$_aInit = array(
		'sub'=>'request'
	);
?>

<div id="page">
	<div class="content">
		<div class="header ep7 clearfix">
			<a href="javascript:void(0);" class="back"><span></span></a>
			닉네임
			<a href="javascript:void(0);" class="next typ_icon"><i class="icon-cog"></i></a>
		</div>
		<hr class="dp2" />
		<div class="select_row_cate ep7">
			<?php include 'inc/tab_mypage.php'; ?>
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper menu_typ">
			<div class="ng_report_wrapper rqdate" onclick="location.href='/942.php'">
				<div class="date_time">5월 11일 오전 11:10</div>
				<p>2017년 대입 결과 알고 싶어요</p>
				<div class="state comp">답변</div>
			</div>
			<div class="ng_report_wrapper rqdate" onclick="location.href='/942.php'">
				<div class="date_time">5월 11일 오전 11:10</div>
				<p>2017년 대입 결과 알고 싶어요</p>
				<div class="state">미답변</div>
			</div>
			<div class="ng_report_wrapper rqdate" onclick="location.href='/942.php'">
				<div class="date_time">5월 11일 오전 11:10</div>
				<p>2018년 3월 모의고사 결과 알고 싶어요</p>
				<div class="state comp">답변</div>
			</div>
			<div class="ng_report_wrapper rqdate" onclick="location.href='/942.php'">
				<div class="date_time">5월 11일 오전 11:10</div>
				<p>2018년 3월 모의고사 결과 알고 싶어요</p>
				<div class="state comp">답변</div>
			</div>
		</div>
	</div>
</div>
    
<?php include 'inc/footer.php'; ?>