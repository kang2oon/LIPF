var host = "http://lab.miraejigi.com:20002";

var isClosedRoom = false;
/*
 * 화면 표시용 메시지 html 생성
 * @param {Object} message
 */
function makeItvChattingMessage (message) {
    if(message.msg == "") return;
    var listItemClass = "right interviewer";
    var profileText = "[내담자" + message.interviewerSeq + "]";
    var profileImageSrc = host + "/static/images/dev/icon_default_client.png";
    var evtDtm;

    if(typeof message.evtDtm == "undefined") {
        evtDtm = new Date(message.msgDtm);
    } else {
        evtDtm = new Date(message.evtDtm);
    }

    var messageDtmStr =
        ("0"+evtDtm.getHours()).slice(-2) + ":" +
        ("0"+evtDtm.getMinutes()).slice(-2);
        // ("0"+evtDtm.getMinutes()).slice(-2) + ":" +
        // ("0"+evtDtm.getSeconds()).slice(-2);

    // var listItem = jQuery("<li></li>");
    // listItem.addClass("message-item");
    // listItem.addClass(listItemClass);
    // listItem.addClass("clear");
    //
    // var profile = jQuery("<div></div>");
    // profile.addClass("profile");
    // profile.text(profileText);
    // profile.append("<br/>");
    //
    // var profileImage = jQuery("<img/>");
    // profileImage.attr("src", profileImageSrc);
    // profile.append(profileImage);
    //
    // var messageHolder = jQuery("<div></div>");
    // messageHolder.addClass("message-holder");
    //
    // var messageTime = jQuery("<div></div>");
    // messageTime.addClass("time");
    // messageTime.text(messageDtmStr);
    //
    // var messageContent = jQuery("<div></div>");
    // messageContent.addClass("message");
    // messageContent.html(message.msg);
    //
    // messageHolder.append(messageTime);
    // messageHolder.append(messageContent);
    //
    // listItem.append(profile);
    // listItem.append(messageHolder);

    var ss = '\n' +
            '<div class="bubble_wrapper clearfix">\n' +
            '   <div class="chat_bubble_wrap my_chat clearfix">\n' +
            '       <div class="arrow_right"></div>\n' +
            '       <div class="chat_bubble">' +
                    message.msg.replace(/\n/gi, "<br/>")  +
            '       </div>\n' +
            '       <div class="time">' +
                    messageDtmStr +
            '       </div>\n' +
            '   </div>\n' +
            '</div>';
    return ss;
}

function makeCslChattingMessage (message) {
    if(message.msg == "") return;
    var listItemClass = "left counselor";
    var profileText = "[상담사 "+ message.counselorSeq + "]";
    var profileImageSrc = host + "/static/images/dev/icon_default_counselor.png";
    var evtDtm;

    if(typeof message.evtDtm == "undefined") {
        evtDtm = new Date(message.msgDtm);
    } else {
        evtDtm = new Date(message.evtDtm);
    }

    var strMessageDtmStartLine =
        (evtDtm.getFullYear()) + "-" +
        ("0"+(evtDtm.getMonth()+1)).slice(-2) + "-" +
        ("0"+evtDtm.getDate()).slice(-2);

    var messageDtmStr =
        ("0"+evtDtm.getHours()).slice(-2) + ":" +
        ("0"+evtDtm.getMinutes()).slice(-2);
    // ("0"+evtDtm.getMinutes()).slice(-2) + ":" +
    // ("0"+evtDtm.getSeconds()).slice(-2);

    // var listItem = jQuery("<li></li>");
    // listItem.addClass("message-item");
    // listItem.addClass(listItemClass);
    // listItem.addClass("clear");
    //
    // var profile = jQuery("<div></div>");
    // profile.addClass("profile");
    // profile.text(profileText);
    // profile.append("<br/>");
    //
    // var profileImage = jQuery("<img/>");
    // profileImage.attr("src", profileImageSrc);
    // profile.append(profileImage);
    //
    // var messageHolder = jQuery("<div></div>");
    // messageHolder.addClass("message-holder");
    //
    // var messageTime = jQuery("<div></div>");
    // messageTime.addClass("time");
    // messageTime.text(messageDtmStr);
    //
    // var messageContent = jQuery("<div></div>");
    // messageContent.addClass("message");
    // messageContent.html(message.msg);
    var listItem = jQuery("<div></div>");
    listItem.addClass("chat_bubble_wrap");
    listItem.addClass("clearfix");
    var ss = '\n' +
        '\n' +
        '\t\t\t\t<div class="chat_date">\n' +
        '\t\t\t\t\t<hr />\n' +
        '\t\t\t\t\t<span>' + strMessageDtmStartLine + '</span>\n' +
        '\t\t\t\t</div>' +
        '<div class="bubble_wrapper clearfix">\n' +
        '<div class="thumb"><img src="/images/character/3.png" alt=""></div>' +
        '   <div class="chat_bubble_wrap clearfix">\n' +
        '        <div class="arrow_left"></div>\n' +
        '        <div class="chat_bubble">' +
        message.msg.replace(/\n/gi, "<br/>") +
        '       </div>\n' +
        '       <div class="time">' +
        messageDtmStr +
        '       </div>\n' +
        '   </div>\n' +
        '</div>';

    // messageHolder.append(messageTime);
    // messageHolder.append(messageContent);
    //
    // listItem.append(profile);
    // listItem.append(messageHolder);

    return ss;
}

var authToken;
var interviewerSeq;
var chatroomSeq;
var counselCategoryId;
var stompClient = null;
var pageNum = 0;
var stompHeaders = {};
function setUiStompConnected(connected) {
    $("#counselStart").prop("disabled", connected);
    $("#counselFinish").prop("disabled", !connected);
    if (connected) {
        $("#conversation").show();
    }
    else {
        $("#conversation").hide();
    }
    $("#messges").html("");
}

function stompConnect() {

    stompHeaders = {'x-auth-token':authToken};

    var socket = new SockJS(host + '/lipf-chat-websocket');
    stompClient = Stomp.over(socket);

    /* heartbeat 기본값으로 둔다 */
    /*
    stompClient.heartbeat.outgoing = 20000; // client will send heartbeats every 20000ms
    stompClient.heartbeat.incoming = 0;     // client does not want to receive heartbeats
                                       		// from the server
    */

    stompClient.connect(stompHeaders, function (frame) {
            setUiStompConnected(true);
            console.log('Stomp Connected: ' + frame);
            stompClient.subscribe('/topic/chatroom/'+chatroomSeq, function (stompMsg) {
                console.log('recv : '+ JSON.stringify(stompMsg.body));
                var html ="";
                var msg = JSON.parse(stompMsg.body);
                if(msg.msgType==="I2CM"){
                    html= makeItvChattingMessage(msg);
                }else if(msg.msgType==="C2IM"){
                    html= makeCslChattingMessage(msg);
                }else if(msg.msgType==="AUTO"){
                    html= makeCslChattingMessage(msg);
                }

                $("#chat_area").append(html);
                $("#cont_wrapper").scrollTop($("#chat_area").height());
            });

            //채팅에 연결이 완료되면 상담사를 요청함.
            counselorRequest();

        }, function(message){
            console.log("Stomp Disconnected by Server");
            disconnect();
        }
    );
}

function stompDisconnect() {
    if (stompClient !== null) {
        stompClient.disconnect();
    }
    setUiStompConnected(false);
    console.log("Stomp Disconnected");
}

function stompSendMessage() {
    var chatMsg={};
    var timeStampInMs = Date.now();//window.performance && window.performance.now && window.performance.timing && window.performance.timing.navigationStart ? window.performance.now() + window.performance.timing.navigationStart : Date.now();
    //console.log(timeStampInMs, Date.now());
    chatMsg.msgDtm = timeStampInMs;
    chatMsg.msg = $("#inputMessage").val();
    stompClient.send("/lipfApp/chat/itvMsg/"+chatroomSeq+"/"+interviewerSeq, stompHeaders,
        JSON.stringify(chatMsg) );
    $("#inputMessage").val("");
}

function createChatRoom(counselCategoryId, callback){
    // callback();return;
    var api = '/itvApi/itv/'+interviewerSeq+'/chatroom/createForMobileApp?counselCategoryId='+counselCategoryId;
    doAjax(api, 'GET', null, callbackChatRoom);

    function callbackChatRoom(response) {
        chatRoom = response;
        chatroomSeq = chatRoom.chatroomSeq;
        $.cookie('chatroomSeq', chatroomSeq,  { expires : 3650, path : '/' });
        callback();
    }
}

function getChatRooms(callback){
    //
    // interviewerSeq = $("#interviewerSeq").val();
    // counselCategoryId = $("#counselCategoryId").val();
    var api = '/itvApi/itv/'+interviewerSeq+'/roomsForMobileApp';
    doAjax(api, 'GET', null, callbackChatRoom);

    function callbackChatRoom(response) {
        callback(response);
    }
}


function getChatMsgList(){ // 이전 메시지 조회
    var api = '/itvApi/itv/'+interviewerSeq+'/chatroom/'+chatroomSeq+'/msgs/page';
    doAjax(api, 'GET', null, callbackChatList);

    function callbackChatList(response) {
        var content = response.content;
        var i = 0;
        for(i = 0; i < content.length; i++){
            var msg = content[i];
            if(msg.msgType==="I2CM"){
                html= makeItvChattingMessage(msg);
            }else if(msg.msgType==="C2IM"){
                html= makeCslChattingMessage(msg);
            }else if(msg.msgType==="AUTO"){
                html= makeCslChattingMessage(msg);
            }

            $("#chat_area").prepend(html);
        }
        $("#cont_wrapper").scrollTop($("#chat_area").height());
        //이전 메시지 조회가 되면, 대화방 참여
        if(!isClosedRoom) stompConnect();
    }
}

function counselorRequest(){

    $.ajax({
        url: host + '/itvApi/itv/'+interviewerSeq+'/chatroom/'+chatroomSeq+'/counselRequest',
        type: 'GET',
        data: null,
        processData: false,
        //contentType: false,
        contentType: 'application/json',
        beforeSend: function (xhr){
            xhr.setRequestHeader('x-auth-token', authToken);
        },
        success: function (response) {
            console.log('counselStart success');
            console.log(response);
            chatRoom = response;
        },
        error: function (jqXHR) {
            console.log('error');
        }

    }).done(function(data) {
        console.log('chat room create done');
    }).fail(function(){
        console.log('chat room create fail -> ');
    });
}

function doLogin(){

    var telnum;
    var pw;
    telnum = $("#telnum").val();
    pw = $("#pw").val();

    var tok = telnum + ':' + pw;
    var auth = "Basic " + btoa(tok);

    var request = $.ajax({
        url: host + '/itvApi/auth/login',
        type: 'GET',
        data: null,
        processData: false,
        crossDomain: true,
        contentType: 'application/json',
        beforeSend: function (xhr){
            xhr.setRequestHeader('Authorization', auth);
        },
        success: function (response) {
            console.log('login success');
            console.log(response);

            //location.replace("end");
            $("#interviewerSeq").val(response.interviewerSeq); // 로그인 한 내담자의 일련번호

            authToken = request.getResponseHeader('x-auth-token'); //인증 토큰
            $("#authToken").val(authToken);

        },
        error: function (jqXHR) {
            console.log('error : '+JSON.stringify(jqXHR));
        }

    }).done(function(data) {
        console.log('login done');
    }).fail(function(){
        console.log('login fail -> ');
    });
}

