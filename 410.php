<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep3 clearfix">
			<a href="#menu" class="side"><span></span></a>
			우리 사연
			<div class="notiwrap">
				<div class="noti"><span>5</span></div>
			</div>
		</div>
		<hr class="dp2" />
		<div class="select_row">
			<div class="row no-gutters">
				<div class="col"><a href="javascript:void(0);" data-slc="slcov_time" class="slcov_time_header">최신순</a></div>
				<div class="col"><a href="javascript:void(0);" data-slc="slcov_cate" class="slcov_cate_header">전체보기</a></div>
			</div>

		</div>
		<hr class="dp2" />
		<div class="cont_wrapper">
			<div class="cont clearfix">
				<div class="author_info clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_03.png" alt=""></div>
					<div class="nm_time fleft">
						<div class="nm">고등어 <span>#가정불화</span></div>
						<div class="stime">10분전</div>
					</div>
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
			<div class="cont clearfix">
				<div class="author_info clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_02.png" alt=""></div>
					<div class="nm_time fleft">
						<div class="nm">냥이 <span>#기타</span></div>
						<div class="stime">10분전</div>
					</div>
				</div>
				<div class="article">
					추워요. 친구들이 모두 롱패딩을 입고 다녀서 저도 입고 싶은데 엄마한테 사달라고 하고 싶은데, 어떻게 말하는게 좋을까요?
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
			<div class="cont clearfix">
				<div class="author_info clearfix">
					<div class="pic fleft"><img src="/images/cha_stu_01.png" alt=""></div>
					<div class="nm_time fleft">
						<div class="nm">사연녀 <span>#관게문제</span></div>
						<div class="stime">15분전</div>
					</div>
				</div>
				<div class="article">
					친하게 지내던 친구가 다른 애들한테 왕따를 당하고 있다. 이전처럼 지내자니 다른 애들한테 나도 따 당할까봐... 무섭다...<br/>
					모른척하자니 너무 미안하고...<br/>
					어떻게 해야될지 모르겠다.. 내가 다 괴롭다. <br/>
					어떻게 된 일인지 궁금하다...<br/>
					친구에게 어떤일이 있었길래 왕따가 되었는지
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
		</div>
		<a href="/511.php" class="float_write_btn ep3"><img src="/images/fab_write.png" alt=""></a>
	</div>
	<?php include 'inc/sidebar.php'; ?>
</div>
<ul id="slcov_time" class="select_over">
    <li><a href="javascript:void(0);" class="active">최신순</a></li>
    <li><a href="javascript:void(0);">댓글 많은 순</a></li>
    <li><a href="javascript:void(0);">공감 많은 순</a></li>
</ul>
<ul id="slcov_cate" class="select_over">
    <li><a href="javascript:void(0);" class="active">전체 보기</a></li>
    <li><a href="javascript:void(0);">정서 문제</a></li>
    <li><a href="javascript:void(0);">행동 문제</a></li>
    <li><a href="javascript:void(0);">자살/자해 위기</a></li>
    <li><a href="javascript:void(0);">관계 문제</a></li>
    <li><a href="javascript:void(0);">폭력/학대</a></li>
    <li><a href="javascript:void(0);">성문제</a></li>
    <li><a href="javascript:void(0);">기타</a></li>
</ul>
<?php include 'inc/footer.php'; ?>
<script>
    $(document).ready(function(){
        $("#slcov_time, #slcov_cate").find("a").click(function () {

            var slcov_id = $(this).parent().parent().attr("id");

            $("#"+ slcov_id).find("a").removeClass("active");
            $("."+ slcov_id +"_header").text($(this).text());
            $(this).addClass("active");

            //코드는 data-code 나 data-id 로 처리
            //코드 처리 하여 ajax처리

            $('.modal-backdrop').remove();
            $("#"+slcov_id).hide();
        });

        $(".bg_comment").click(function () {
            //코드는 data-code 나 data-id 로 처리
            location.href='/415.php';
        })
    });

</script>
