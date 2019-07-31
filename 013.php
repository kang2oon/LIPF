<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep_mem clearfix">
			<a href="javascript:void(0);" class="exit" data-toggle="modal" data-target="#exit_write">나가기</a>
			회원가입
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc">
			<div class="join2_mainment">
				<strong>장그래</strong>님,<br/>
				이제, 잘 들어줄 개의 모든 기능을 이용할 수 있습니다.<br/>
				마음 속 고민을 털어놓으면 마음이 한결 가벼워질거에요.
			</div>
			<div class="slc_char_wrap">
				<ul class="slc_char clearfix">
					<li class="active"><img src="/images/cha_stu_01.png" alt=""></li>
					<li><img src="/images/cha_stu_02.png" alt=""></li>
					<li><img src="/images/cha_stu_03.png" alt=""></li>
					<li><img src="/images/cha_stu_02.png" alt=""></li>
					<li><img src="/images/cha_stu_01.png" alt=""></li>
				</ul>
				<p>캐릭터를 선택해 주세요.</p>
			</div>
			<div class="form_wrapper">
				<div class="clearfix segment2">
					<div class="fleft">
						<div class="input_area age clearfix">
							<div class="label">성별</div>
							<input type="text" >
						</div>
						<div class="guide_info">&nbsp;</div>
					</div>
					<div class="fright">
						<div class="input_area age clearfix">
							<div class="label">나이</div>
							<input type="number" >
						</div>
						<div class="guide_info">&nbsp;</div>
					</div>
				</div>
				<div class="input_area mail clearfix">
					<div class="label">이메일</div>
					<input type="email" >
				</div>
				<div class="guide_info">&nbsp;</div>
				<div class="acenter local_agree">
					<input type="checkbox" id="local_agree"> <label for="local_agree"><span></span> 위치 정보 수집 동의</label>
				</div>
				<div class="guide_addtion">
					위 사항은 선택 입력사항 입니다.<br/>입력해주신 정보는 더 나은 서비스와 정보를<br/>전달하기 위한 목적으로만 사용됩니다.
				</div>
				<a href="javascript:void(0);" class="btn_join comp">확인</a>

			</div>
		</div>
	</div>
	
	<div class="modal fade" id="exit_write" tabindex="-1" role="dialog" aria-labelledby="exit_write" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					회원가입을 취소하시겠습니까?<br/>
					가입 취소를 선택하면 작성중인 모든 정보가 삭제됩니다.
				</div>
				<div class="modal-footer">
					<a href="javascript:void(0);" class="comform negative">가입 취소</a>
					<a href="javascript:void(0);" data-dismiss="modal">닫기</a>
				</div>
			</div>
		</div>
	</div>
</div>
    
<?php include 'inc/footer.php'; ?>