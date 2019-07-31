<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep2 clearfix">
			<a href="javascript:void(0);" class="back" data-toggle="modal" data-target="#exit_write"><span></span></a>
			공감 이야기
		</div>
		<hr class="dp2" />
		<div class="select_cate">
			정서문제
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper bggray">
			<div class="chat_date">
				<hr />
				<span>2018-03-29 15:00</span>
			</div>
			<div class="bubble_wrapper clearfix">
				<div class="thumb"><img src="/images/cha_stu_03.png" alt=""></div>
				<div class="chat_bubble_wrap clearfix">
					<div class="arrow_left"></div>
					<div class="chat_bubble">
						반가워요.<br/>
						친구와의 갈등이 있나봐요.<br/>
						어던 일이 힘들었는지 자세히 이야기 해 줄 수 있나요?
					</div>
					<div class="time">15:00</div>
				</div>
				<div class="chat_bubble_wrap my_chat clearfix">
					<div class="arrow_right"></div>
					<div class="chat_bubble">
						네, 저 지금 너무 힘들어요
					</div>
					<div class="time">15:00</div>
				</div>
                <div class="chat_bubble_wrap my_chat clearfix">
                    <div class="arrow_right"></div>
                    <div class="chat_bubble">
                        네, 저 지금 너무 힘들어요2 네, 저 지금 너무 힘들어요2네, 저 지금 너무 힘들어요2네, 저 지금 너무 힘들어요2네, 저 지금 너무 힘들어요2네, 저 지금 너무 힘들어요2네, 저 지금 너무 힘들어요2
                    </div>
                    <div class="time">17:00</div>
                </div>
			</div>
			<div class="comp_chat_wrapper clearfix">
				이미 완료된 상담의 대화입니다. <a href="javascript:void(0);"><i class="icon-trash"></i></a>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="exit_write" tabindex="-1" role="dialog" aria-labelledby="exit_write" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					대화방을 나가시겠습니까?<br/>
					대화방을 나가시면 대화 목록에서 삭제됩니다.
				</div>
				<div class="modal-footer">
					<a href="/630.php" class="comform negative">나가기</a>
					<a href="javascript:void(0);" data-dismiss="modal">취소</a>
				</div>
			</div>
		</div>
	</div>
</div>
    
<?php include 'inc/footer.php'; ?>
