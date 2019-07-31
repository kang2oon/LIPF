<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep_mem clearfix">
			<a href="javascript:void(0);" class="exit" data-toggle="modal" data-target="#exit_write">나가기</a>
			비밀번호 변경
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc">
			<div class="findpwd_mainment">
				새로운 비밀번호 설정을 위해<br/>가입 시 입력한 힌트를 확인합니다.
			</div>
			<div class="form_wrapper">
				<div class="input_area tel_db clearfix">
					<div class="label">전화번호</div>
					<input type="tel" >
					<a class="dbcheck">중복확인</a>
				</div>
				<div class="guide_info">&nbsp;</div>
				<div class="input_area pwdchk clearfix">
					<div class="label">비밀번호 힌트</div>
					<div class="select fleft">
						<select>
							<option>질문 선택</option>
							<option>나의 고향은?</option>
							<option>친할아버지 성함은?</option>
							<option>외할머니 성함은?</option>
							<option>가장 기억에 남는 선물은?</option>
							<option>가장 좋아하는 인물은?</option>
							<option>가장 좋아하는 동물은?</option>
							<option>가장 좋아하는 색깔은?</option>
						</select>
						<div class="select__arrow"></div>
					</div>
				</div>
				<div class="guide_info">&nbsp;</div>
				<div class="input_area pwdhint clearfix">
					<div class="label">힌트 답변</div>
					<input type="text"  >
				</div>
				<div class="guide_info negative">&nbsp;</div>
				<a href="javascript:void(0);" class="btn_join">다음</a>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="exit_write" tabindex="-1" role="dialog" aria-labelledby="exit_write" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					비밀번호 변경을 취소하시겠습니까?<br/>
				</div>
				<div class="modal-footer">
					<a href="/451.php" class="comform negative">변경 취소</a>
					<a href="javascript:void(0);" data-dismiss="modal">닫기</a>
				</div>
			</div>
		</div>
	</div>
</div>
    
<?php include 'inc/footer.php'; ?>