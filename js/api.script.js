var host = "http://lab.miraejigi.com:20002";
var authToken = $.cookie('authToken');
var interviewerSeq = $.cookie('interviewerSeq');

function doAjax(api, type, data, callback, isAuth = true) {
    if(!isAuth) authToken = '';
    $.ajax({
        url: host + api,
        type: type,
        data: data,
        processData: false,
        //contentType: false,
        contentType: 'application/json',
        beforeSend: function (xhr){
            xhr.setRequestHeader('x-auth-token', authToken);
        },
        success: function (response) {
            console.log('success');
            console.log(response);
            callback(response);
        },
        error: function (jqXHR) {
            console.log('error');
            try {
                if (jqXHR.responseJSON.error == "Unauthorized") {
                    location.href = "/login";
                    return;
                }else if(jqXHR.responseJSON.path.indexOf("roomsForMobileApp") > 0){
                    callback(null);
                    return;
                }
            }catch (e) {
                
            }
            try {
                switch (jqXHR.responseJSON.errorCode) {
                    case  10001:
                    case  10002:
                        callback("Duplicated");
                        break;
                    case  10101:
                        alert(jqXHR.responseJSON.message);
                        break;
                    default:
                        alert('미확인 오류입니다. 관리자에게 문의해 주세요.');
                        history.back();
                        break;
                }
            }catch (e) {
                
            }
        }

    }).done(function(data) {
        console.log('done');
    }).fail(function(){
        console.log('fail');
    });
}

function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}

function getDateBefore(date){

    var theDate = new Date(date);
    var curTimeStamp = new Date().getTime();
    var timeBefore = (curTimeStamp - date) / 1000 / 60;
    if (timeBefore > 60 * 24 * 7) {
        timeBefore = new Date(date).format();
    }else if (timeBefore > 60 * 24) {
        timeBefore = Math.floor(timeBefore / (60 * 24)) + "일전";
    }else if (timeBefore > 60) {
        timeBefore = Math.floor(timeBefore / 60) + "시간전";
    }else if (timeBefore > 1) {
        timeBefore = Math.floor(timeBefore) + "분전";
    }else{
        timeBefore = "조금전";
    }
    return timeBefore;
}