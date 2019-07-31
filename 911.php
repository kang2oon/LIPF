<?php 
	include 'inc/header.php'; 
	
	$_aInit = array(
		'sub'=>'story'
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
			<div class="cont clearfix" onclick="location.href='/415.php'">
				<div class="author_info clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_03.png" alt=""></div>
					<div class="nm_time fleft">
						<div class="nm">고등어 <span>#가정불화</span></div>
						<div class="stime">10분전</div>
					</div>
				</div>
				<div class="article">
					학원을 다니고 싶지 않은데, 엄마가 계속 학원을 보내요. 엄마한테 뭐라고 얘기 해야할지 모르겠어요
				</div>
				<div class="action_stat">
					<span class="bg_sympathy">86</span>
					<span class="bg_comment">1</span>
				</div>
				<hr class="dp2" />
			</div>
			<div class="cont clearfix" onclick="location.href='/415.php'">
				<div class="author_info clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_03.png" alt=""></div>
					<div class="nm_time fleft">
						<div class="nm">고등어 <span>#기타</span></div>
						<div class="stime">18분전</div>
					</div>
				</div>
				<div class="article">
					학원을 다니고 싶지 않은데, 엄마가 계속 학원을 보내요. 엄마한테 뭐라고 얘기 해야할지 모르겠어요
				</div>
				<div class="action_stat">
					<span class="bg_sympathy">86</span>
					<span class="bg_comment">1</span>
				</div>
				<hr class="dp2" />
			</div>
		</div>
	</div>
</div>
    
<?php include 'inc/footer.php'; ?>