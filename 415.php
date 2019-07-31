<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep3 clearfix">
			<a href="javascript:void(0);" class="back"><span></span> 게시글</a>
			<!--a href="javascript:void(0);" class="modify" data-slc="modif_btn">수정</a-->
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc">
			<div class="cont clearfix">
				<div class="author_info clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_03.png" alt=""></div>
					<div class="nm_time fleft">
						<div class="nm">고등어 <span>#가정불화</span></div>
						<div class="stime">10분전</div>
					</div>
					<div class="fright modify"><a href="javascript:void(0);" data-slc="modif_btn"><i class="icon-ellipsis-vertical"></i></a></div>
				</div>
				<div class="article">
					학원을 다니고 싶지 않은데, 엄마가 계속 학원을 보내요. 엄마한테 뭐라고 얘기 해야할지 모르겠어요
				</div>
				<div class="action_stat">
					<span class="bg_sympathy">86</span>
					<span class="bg_comment">1</span>
				</div>
				<hr class="dp1" />
				<div class="row no-gutters arti_action">
					<div class="col"><a href="javascript:void(0);" class="bg_sympathy">공감하기</a></div>
					<div class="col"><a href="javascript:void(0);" class="bg_comment">댓글달기</a></div>
				</div>
				<hr class="dp2" />
			</div>
			<div class="comment_wrapper">
				<div class="comment clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_02.png" alt=""></div>
					<div class="memo_wrap fleft">
						<div class="nm">냥이<span>18분전</span></div>
						<div class="memo">저도 그랬어요 몇일 전에 엄마랑 이야기를 했더니 한결 편안해요. 엄마는 언제나 내 편!</div>
						<div class="sympathy_wrap clearfix">
							<div class="fleft"><span class="bg_sympathy">31</span></div>
							<div class="fright"><a href="javascript:void(0);" class="bg_sympathy">공감하기</a></div>
						</div>
					</div>
				</div>
				<hr class="dp2" />
				<div class="comment clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_01.png" alt=""></div>
					<div class="memo_wrap fleft">
						<div class="nm">전교1등<span>18분전</span></div>
						<div class="memo">힘내세요! 화이팅</div>
						<div class="sympathy_wrap clearfix">
							<div class="fleft"><span class="bg_sympathy">31</span></div>
							<div class="fright"><a href="javascript:void(0);" class="bg_sympathy">공감하기</a></div>
						</div>
					</div>
					<div class="del_back_wrapper">
						<div class="row no-gutters">
							<div class="col">삭제되었습니다</div>
							<div class="col"><a href="javascript:void(0);"><i class="icon-undo"></i> 실행취소</a></div>
						</div>
					</div>
				</div>
				<hr class="dp2" />
				<div class="comment clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_03.png" alt=""></div>
					<div class="memo_wrap fleft">
						<div class="nm">멍이<span>18분전</span></div>
						<div class="memo">친구한테 괜찮냐고 물어보며 다가가주면 정말 고마워할거 같아요.</div>
						<div class="sympathy_wrap clearfix">
							<div class="fleft"><span class="bg_sympathy">31</span></div>
							<div class="fright"><a href="javascript:void(0);" class="bg_sympathy">공감하기</a></div>
						</div>
					</div>
				</div>
				<hr class="dp2" />
			</div>
            <div class="comment_write_wrap clearfix">
                <div class="btn_area blank fleft">&nbsp;</div>
                <div class="input_field one_side fleft chat_field"><textarea type="text" name="comment" id="comment" rows="1" placeholder="위로가 될 수 있는 따뜻한 댓글 부탁드립니다." ></textarea></div>
                <div class="btn_area color_ep3 fleft"><a href="javascript:startProgress()"><i class="icon-arrow-right"></i></a></div>
            </div>
		</div>
	</div>
</div>
<ul id="modif_btn" class="modify_menu_layer">
	<li><a href="javascript:void(0);">수정하기</a></li>
	<li><a href="javascript:void(0);">삭제하기</a></li>
</ul>
<?php include 'inc/footer.php'; ?>
<script>
    $(document).ready(function () {
        $(".comment_write_wrap").hide();

        $(".bg_comment").click(function () {
            $("#comment").val("");
            $(".comment_write_wrap").show();
            $("#comment").focus();
        });

        $("#comment").on('keydown keyup', function () {
            var lines = $(this).prop('scrollHeight') / $(this).css('line-height').replace('px','');

            if(lines > 5){
                $(this).height(1).height( $(this).css('line-height').replace('px','') * 5);
            }else{
                $(this).height(1).height( $(this).prop('scrollHeight'));
            }

        });
    });
</script>
