<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep_mem clearfix">
			<a href="javascript:void(0);" class="exit" data-toggle="modal" data-target="#exit_write">나가기</a>
			회원가입
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc">
			<div class="join1_mainment">
				회원가입 후 이용해주세요
				<h1>누구보다 당신의 말을 잘 들어줄<br/>다들어줄개에 어서오시개~</h1>
			</div>
			<div class="form_wrapper">
				<div class="input_area pwd clearfix">
					<div class="label">전화번호</div>
					<input type="tel" >
				</div>
				<div class="guide_info">&nbsp;</div>
				<div class="input_area nicknm clearfix">
					<div class="label">닉네임</div>
					<input type="text" >
					<a class="dbcheck">중복확인</a>
				</div>
				<div class="guide_info">사용 가능한 닉네임입니다.</div>
				<div class="input_area pwd clearfix">
					<div class="label">비밀번호</div>
					<input type="password" placeholder="한영, 숫자가 포함된 6자 이상의 조합" >
				</div>
				<div class="guide_info">&nbsp;</div>
				<div class="input_area pwdchk clearfix">
					<div class="label">비밀번호 확인</div>
					<input type="password" placeholder="비밀번호를 한번 더 입력하세요." >
				</div>
				<div class="guide_info negative">비밀번호가 서로 다릅니다. 다시 입력해주세요.</div>
				<div class="input_area pwdchk clearfix">
					<div class="label">비밀번호 힌트</div>
					<div class="select fleft" id="selPWHint">
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
				<div class="guide_info negative">힌트 답변을 잊어버리는 경우, 비밀번호를 찾을 수 없습니다.<br/>반드시 기억할 수 있는 답변을 한글로 적어주세요.</div>
				<a href="javascript:void(0);" class="btn_join">회원 가입</a>
				<a href="javascript:void(0);" class="goto_login">사용 중인 닉네임으로 로그인하기</a>
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

<script>
  $(document).ready(function() {

  });
</script>