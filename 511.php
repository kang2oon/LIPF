<?php include 'inc/header.php'; ?>

<div id="page">
	<div class="content">
		<div class="header ep3 clearfix">
			<a href="javascript:void(0);" class="exit" data-toggle="modal" data-target="#exit_write">나가기</a>
			우리 사연
			<a href="javascript:void(0);" class="next" data-toggle="modal" data-target="#write_send">올리기</a>
		</div>
		<hr class="dp2" />
        <form id="form_write">
		<div class="select_row">
			<div class="row no-gutters">
				<div class="col"><a href="javascript:void(0);" data-slc="slcov_cate" class="slcov_cate_header">사연 주제</a></div>
			</div>
			<ul id="slcov_cate" class="select_over">
				<li><a href="javascript:void(0);" class="active">정서 문제</a></li>
				<li><a href="javascript:void(0);">행동 문제</a></li>
				<li><a href="javascript:void(0);">자살/자해 위기</a></li>
				<li><a href="javascript:void(0);">관계 문제</a></li>
				<li><a href="javascript:void(0);">폭력/학대</a></li>
				<li><a href="javascript:void(0);">성문제</a></li>
				<li><a href="javascript:void(0);">기타</a></li>
			</ul>
		</div>
		<hr class="dp2" />
		<div class="cont_wrapper bggray">
			<textarea cols="10" rows="10" placeholder="마음 속 복잡한 생각과 고민들을 글로 털어놓아 보세요. 아마 한결 편안해 질거예요.&#13;&#10;&#13;&#10;고민 주제를 선택하지 않으면 #기타 주제로 분류됩니다.&#13;&#10;고민 주제를 선택해 주세요."></textarea>
		</div>
        </form>
	</div>
	
	<div class="modal fade" id="exit_write" tabindex="-1" role="dialog" aria-labelledby="exit_write" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					작성중인 글을 취소하시겠습니까?<br/>
					작성 취소를 선택하면 작성중인 글이 삭제됩니다.
				</div>
				<div class="modal-footer">
					<a href="/410.php" class="comform negative">작성 취소</a>
					<a href="javascript:void(0);" data-dismiss="modal">닫기</a>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="write_send" tabindex="-1" role="dialog" aria-labelledby="exit_write" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					사연을 올리시겠습니까?
				</div>
				<div class="modal-footer">
					<a href="javascript:submitForm();" class="comform negative">확인</a>
					<a href="javascript:void(0);" data-dismiss="modal">다시 작성</a>
				</div>
			</div>
		</div>
	</div>
</div>
    
<?php include 'inc/footer.php'; ?>
<script>
    $(document).ready(function(){
        $("#slcov_cate").find("a").click(function () {

            $("#slcov_cate").find("a").removeClass("active");
            $(".slcov_cate_header").text($(this).text());
            $(this).addClass("active");

            //코드는 data-code 나 data-id 로 처리
            //코드 처리 하여 ajax처리

            $('.modal-backdrop').remove();
            $("#slcov_cate").hide();
        });

        $('#exit_write').on('shown.bs.modal', function () {
            $('#slcov_cate').hide();
        })
    });

    function submitForm(){

    }

    $("#form_write").validate({

    });

    $.validator.setDefaults({
        submitHandler: function() {
            var $form = $("#form_write");
            var jsonData = JSON.stringify(getFormData($form));
            $.ajax({
                type: "POST",
                url: host + "/itvApi/itv/"+interviewerSeq+"/storyBoard/write?counselCategoryId=02000",
                data: jsonData,
                dataType: "json",
                contentType: "application/json",
                crossDomain: true,
                success: function (data) {
                    if (data.code == '0') {
                        alert('code:' + data.code + '\n' + 'msg:' + data.msg);
                    }
                }, error: function (jqXHR, textStatus, errorThrown) {
                    alert(textStatus.msg);
                }
            });
            alert("등록이 완료 되었습니다.");
        }
    });
</script>
