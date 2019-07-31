// 정규식을 적용
$.validator.addMethod("regx", function(value, element, regexpr) {
    return regexpr.test(value);
});

// 한글, 영어를 체크하여 계산된 바이트 길이를 최소 길이와 비교
$.validator.addMethod('minbytelength', function (value, element, param) {
    var nMin = param;
    var nBytes = $.type(value) !== "string" ? 0 : value.getByteLength(); // 문자열의 Byte 길이를 반환(한글은 2byte이며 영숫자는 1byte)
    return this.optional(element) || (nBytes === 0 || nBytes >= nMin);
});

// 한글, 영어를 체크하여 계산된 바이트 길이를 최대 길이와 비교
$.validator.addMethod('maxbytelength', function (value, element, param) {
    var nMax = param;
    var nBytes = $.type(value) !== "string" ? 0 : value.getByteLength(); // 문자열의 Byte 길이를 반환(한글은 2byte이며 영숫자는 1byte)
    return this.optional(element) || (nBytes === 0 || nBytes <= nMax);
});

// 한글, 영어를 체크하여 계산된 바이트 길이를 최소 길이와 최대 길이 비교
$.validator.addMethod('bytelength', function (value, element, params) {
    var nMin = params.min;
    var nMax = params.max;
    var nBytes = $.type(value) !== "string" ? 0 : value.getByteLength(); // 문자열의 Byte 길이를 반환(한글은 2byte이며 영숫자는 1byte)
    return this.optional(element) || (nBytes === 0 || (nBytes >= nMin && nBytes <= nMax));
});

String.prototype.getByteLength = function() {
    var nCnt = 0;
    for (var i = 0; i < this.length; i++) {
        if (this.charCodeAt(i) > 255)
            nCnt += 2;
        else
            nCnt++;
    }
    return nCnt;
}

function getPasswdHintQuery() {
    $.getJSON(host + "/itvApi/commonInfo/pwHintQuery", function (data) {
        // $.getJSON("/repeater/lab.miraejigi.com:20002@@itvApi@@commonInfo@@pwHintQuery", function (data) {
        $.each(data, function (index, value) {
            if (index == "content") {
                var ss = "<option value=''>질문 선택</option>";
                $.each(value, function (index, value) {
                    ss += "<option value='" + value["cd"] + "'>" + value["cdNm"] + "</option>";
                });
                $("#pwHintQuery").empty().append(ss);
            }
        });
    });
}