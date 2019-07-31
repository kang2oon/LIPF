<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep2 clearfix">
			<a href="javascript:void(0);" class="back"><span></span></a>
			상담하기
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc">
			<div class="tit_pwd">암호 변경</div>
			<div class="sett_pwd_guide">
				채팅 프라이버시를 위해 암호를 변경합니다.<br/>
				타인이 알기 쉬운 생일, 전화번호를 제외하고<br/>
				나만 기억할 수 있는 네자리 숫자를 입력해주세요.
			</div>
			<div class="pwd_wrapper clearfix">
				<input type="number" id="pwd1" class="pwd" maxlength="1" size="1">
				<input type="number" id="pwd2" class="pwd" maxlength="1" size="1">
				<input type="number" id="pwd3" class="pwd" maxlength="1" size="1">
				<input type="number" id="pwd4" class="pwd" maxlength="1" size="1">
			</div>
		</div>
        <input id="password" type="input">
    </div>
    <div class="numpad_wrapper">
        <ul class="clearfix">
            <li><a href="javascript:void(0);" data-id="1">1</a></li>
            <li><a href="javascript:void(0);" data-id="2">2</a></li>
            <li><a href="javascript:void(0);" data-id="3">3</a></li>
            <li><a href="javascript:void(0);" data-id="4">4</a></li>
            <li><a href="javascript:void(0);" data-id="5">5</a></li>
            <li><a href="javascript:void(0);" data-id="6">6</a></li>
            <li><a href="javascript:void(0);" data-id="7">7</a></li>
            <li><a href="javascript:void(0);" data-id="8">8</a></li>
            <li><a href="javascript:void(0);" data-id="9">9</a></li>
            <li><a href="javascript:void(0);" data-id="reset">취소</a></li>
            <li><a href="javascript:void(0);" data-id="0">0</a></li>
            <li><a href="javascript:void(0);" data-id="back"><i class="icon-long-arrow-left"></i></a></li>
        </ul>
    </div>
</div>

@include('include.footer')
<script>
    $(document).ready(function () {
        $(".numpad_wrapper").fadeIn()
            .css({bottom:-300,position:'fixed'})
            .animate({bottom:0}, 800, function() {
                //callback
            });
    });
</script>