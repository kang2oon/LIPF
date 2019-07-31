<?php
$host = "http://lab.miraejigi.com:20002";
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <title>Interviewer Chat</title>
    <link href="<?=$host?>/webjars/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?=$host?>/static/css/dev/sampleChat.css" />

    <script src="<?=$host?>/webjars/jquery/jquery.min.js"></script>
    <script src="<?=$host?>/webjars/sockjs-client/sockjs.min.js"></script>
    <script src="<?=$host?>/webjars/stomp-websocket/stomp.min.js"></script>

    <script src="/js/sampleChat.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
</head>

<body>

<div id="counselMonitoringDetailWrap" class="counselling-wrap ui-dialog-content ui-widget-content" style="width: auto; min-height: 55px; max-height: none; height: auto;">

    <div class="message-wrap" style="width: 400px;">

        <div > <!-- style="visibility: hidden" -->
            <label for="telnum"> 전화번호 : </label>
            <input type="number" id="telnum" placeholder="전화번호( '-' 없이 )" value='12345678904' />
        </div>

        <div > <!-- style="visibility: hidden" -->
            <label for="pw"> 비밀번호 : </label>
            <input type="password" id="pw" placeholder="비밀번호" value='1234abc'  />
        </div>

        <button id="login" class="button" type="submit">로그인</button>

        <div > <!-- style="visibility: hidden" -->
            <label for="authToken"> 인증 토큰 : </label>
            <input type="text" id="authToken" placeholder="" value='' style="width:300px;" />
        </div>

        <div > <!-- style="visibility: hidden" -->
            <label for="interviewerSeq">Interviewer Seq :</label>
            <input type="number" id="interviewerSeq" placeholder="Interviewer Seq" value='38'  />
        </div>


        <button id="chatrooms" class="button" type="submit">대화방 조회</button>

        <div id="createDiv" >
            <label for="counselCategoryId"> 상담 카테고리 :</label>
            <select name="counselCategory" id="counselCategoryId"> <!--Supplement an id here instead of using 'text'-->
                <option value="">선택없음</option>
                <option value="01000">정서문제</option>
                <option value="02000">행동문제</option>
                <option value="03000">자살/자해위기</option>
                <option value="04000">관계문제</option>
                <option value="05000">폭력/학대</option>
                <option value="06000">성문제</option>
                <option value="99000">기타</option>
            </select>

            <button id="create" class="button" type="submit">대화방 만들기</button>

        </div>



        <div>
            <label for="chatRoomSeq"> ChatRoom :</label>
            <input type="number" id="chatRoomSeq"  placeholder="없음"  value='' disabled />

            <button id="counselStart" type="submit">상담 요청</button>

        </div>

    </div>

    <div  class="message-wrap" style="width: 400px;">
        <div class="counselor-message-wrap">
            <div class="message-list" id="msgs">
                <ul id="currentMessageList">

                </ul>
            </div>
        </div>

        <div class="message-input-wrap" id="counselorInputMessageWrap">
            <textarea id="inputMessage" name="input_message"></textarea>
            <a type="button" id="send" class="btn-send">Send</a>

        </div>

    </div>

</div>
</body>

</html>
