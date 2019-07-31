<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep7 clearfix">
			<a href="javascript:void(0);" class="back"><span></span></a>
			자료 요청하기
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc">
			<div class="cont clearfix">
				<div class="author_info clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_03.png" alt=""></div>
					<div class="nm_time fleft">
						<div class="nm">2017년 대입 결과가 알고 싶어요</div>
						<div class="stime">5월 11일 오전 11:00</div>
					</div>
					<div class="fright modify"><a href="javascript:void(0);" data-slc="modif_btn"><i class="icon-ellipsis-vertical"></i></a></div>
				</div>
				<div class="article">
					2017년 대입 결과가 알고 싶어요
				</div>
				<hr class="dp1" />
				<div class="row no-gutters arti_action">
					<div class="col"><a href="javascript:void(0);" class="bg_comment">댓글달기</a></div>
				</div>
				<hr class="dp2" />
			</div>
			<div class="comment_wrapper">
				<div class="comment clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_02.png" alt=""></div>
					<div class="memo_wrap fleft">
						<div class="nm">관리자<span class="left_time">5월 11일 오전 11:00</span></div>
						<div class="memo typ2">안녕하세요?<br/>요청하신 자료가 업로드되었습니다.</div>
					</div>
				</div>
				<hr class="dp2" />
			</div>
		</div>
        <div class="comment_write_wrap clearfix">
            <div class="btn_area blank fleft">&nbsp;</div>
            <div class="input_field one_side fleft"><input id="comment" type="text" placeholder="댓글을 입력하세요." ></div>
            <div class="btn_area color_ep3 fleft"><a href="javascript:void(0);"><i class="icon-arrow-right"></i></a></div>
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
    });
</script>
