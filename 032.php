<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep_mem clearfix">
			<a href="javascript:void(0);" class="exit" data-toggle="modal" data-target="#exit_write">나가기</a>
			비밀번호 변경
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc">
			<div class="findpwd_mainment sty2">
				새로운 비밀번호 설정합니다.
			</div>
			<div class="form_wrapper">
				<div class="input_area pwd_new clearfix">
					<div class="label">새 비밀번호</div>
					<input type="password" placeholder="한영, 숫자가 포함된 6자 이상의 조합" >
				</div>
				<div class="guide_info">&nbsp;</div>
				<div class="input_area pwdchk clearfix">
					<div class="label">비밀번호 확인</div>
					<input type="password" placeholder="비밀번호를 한번 더 입력하세요." >
				</div>
				<div class="guide_info typ3 negative">비밀번호가 서로 다릅니다. 다시 입력해주세요.</div>
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
					비밀번호가 아직 변경되지 않았습니다.<br/>비밀번호 변경을 취소하시겠습니까?
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