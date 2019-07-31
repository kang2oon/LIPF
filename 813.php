<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep6 clearfix">
			<a href="javascript:void(0);" class="back" data-toggle="modal" data-target="#exit_write"><span></span></a>
			자료 요청하기
			<a href="javascript:void(0);" class="next" data-toggle="modal" data-target="#write_send">요청하기</a>
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper not_slc bggray">
			<div class="req_tit">
				<input type="text" placeholder="요청 제목" >
			</div>
			<div class="preview_textarea h-75">
				<textarea cols="10" rows="10" placeholder="요청 내용&#13;&#10;&#13;&#10;희망하시는 자료를 요청하세요"></textarea>
			</div>
		</div>
	</div>

    <div class="modal fade" id="exit_write" tabindex="-1" role="dialog" aria-labelledby="exit_write" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    작성중인 글을 취소하시겠습니까?<br/>
                    작성 취소를 선택하면 작성중인 글이 삭제됩니다.
                </div>
                <div class="modal-footer">
                    <a href="/811.php" class="comform negative">작성 취소</a>
                    <a href="javascript:void(0);" data-dismiss="modal">닫기</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="write_send" tabindex="-1" role="dialog" aria-labelledby="exit_write" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    자료를 요청하시겠습니까?
                </div>
                <div class="modal-footer">
                    <a href="javascript:void(0);" class="comform negative">확인</a>
                    <a href="javascript:void(0);" data-dismiss="modal">다시 작성</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php include 'inc/footer.php'; ?>