<?php 
	include 'inc/header.php';

	$_aInit = array(
		'sub'=>'alram'
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
			<div class="cont clearfix">
				<div class="author_info typ3 clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_03.png" alt=""></div>
					<div class="nm_time fleft">
						<div class="nm"><strong>고등어</strong> 님이 <strong>냥이</strong> 님의 사연에 공감합니다.</div>
						<div class="time">10분전</div>
					</div>
				</div>
				<hr class="dp1" />
				<div class="author_info typ3 clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_02.png" alt=""></div>
					<div class="nm_time fleft">
						<div class="nm"><strong>냥이</strong> 님이 <strong>고등어</strong> 님의 사연에 댓글을 달았습니다: 저도 그랬어요 화이팅!</div>
						<div class="time">1시간전</div>
					</div>
				</div>
				<hr class="dp1" />
				<div class="author_info typ3 clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_01.png" alt=""></div>
					<div class="nm_time fleft">
						<div class="nm"><strong>냥이</strong> 님이 <strong>고등어</strong> 님의 사연에 댓글을 달았습니다: 저도 그랬는데 엄마한테 솔직히 얘기하니까 마음이 편해졌어요.</div>
						<div class="time">2018년 5월 11일 오후 4시 7분</div>
					</div>
				</div>
				<hr class="dp1" />
			</div>
		</div>
	</div>
</div>
    
<?php include 'inc/footer.php'; ?>