<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep2 clearfix">
			<a href="javascript:void(0);" class="back"><span></span></a>
			상담하기
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc">
			<div class="tit_pwd">잠금 암호를 입력해주세요</div>
			<div class="pwd_wrapper clearfix">
				<input type="number" id="pwd1" class="pwd" maxlength="1" size="1">
				<input type="number" id="pwd2" class="pwd" maxlength="1" size="1">
				<input type="number" id="pwd3" class="pwd" maxlength="1" size="1">
				<input type="number" id="pwd4" class="pwd" maxlength="1" size="1">
			</div>
			<div class="find_pwd_guide">
				<i class="icon-question-sign"></i><br/>
				암호를 잊어버렸나요?<br/>
				<span>마이페이지에서 암호를 변경 후 이용하세요</span>
			</div>
		</div>
		<div class="numpad_wrapper testnum">
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
        <input id="password" type="hidden">
	</div>
</div>
    
<?php include 'inc/footer.php'; ?>
<script>
    $(document).ready(function () {
        $(".numpad_wrapper").fadeIn()
            .css({bottom:-300,position:'fixed'})
            .animate({bottom:0}, 800, function() {
                //callback
            });

        $(".testnum").find('a').click(function () {

            if($(".nempty").length == 4 ){
                location.href = '/631.php';
            }
        });
    });
</script>
