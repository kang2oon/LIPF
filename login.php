<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep_mem clearfix">
			<a href="javascript:void(0);" class="exit" data-toggle="modal" data-target="#exit_write">나가기</a>
			로그인
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc">
			<div class="login_box_wrapper">
				<div class="form_wrapper">
					<div class="input_area nicknm2 clearfix">
						<div class="label">전화번호</div>
						<input type="tel" >
						<i class="icon-question-sign"></i>
					</div>
					<div class="guide_info">&nbsp;</div>
					<div class="input_area pwd clearfix">
						<div class="label">비밀번호</div>
						<input type="password" placeholder="한영, 숫자가 포함된 6자 이상의 조합" >
					</div>
					<div class="guide_info">&nbsp;</div>
				</div>
				<a href="javascript:void(0);" class="goto_findpwd">비밀번호를 잊었어요</a>
				<div class="btn_box_wrapper">
					<a href="javascript:void(0);" class="login">로그인</a>
					<a href="javascript:void(0);" class="join">회원가입</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="exit_write" tabindex="-1" role="dialog" aria-labelledby="exit_write" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					로그인을 취소하시겠습니까?<br/>
					로그인 취소를 선택하면 이전 페이지로 돌아갑니다.
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="comform negative">로그인 취소</a>
					<a href="javascript:void(0);" data-dismiss="modal">닫기</a>
				</div>
			</div>
		</div>
	</div>
</div>
    
<?php include 'inc/footer.php'; ?>