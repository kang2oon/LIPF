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
			<div class="preview_textarea">
				
			</div>
			<div class="input_wrapper clearfix">
				<div class="btn_area fleft"><a href="javascript:void(0);"><i class="icon-camera"></i></a></div>
				<div class="input_field fleft"><input type="text" ></div>
				<div class="btn_area fleft"><a href="/631_comp.php"><i class="icon-arrow-right"></i></a></div>
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
