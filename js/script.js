var host = "http://lab.miraejigi.com:20002";
var authToken = $.cookie('authToken');

$(function() {
	$('nav#menu').mmenu();
	
	$('a[data-slc]').click(function(){
		slc_val = '#' + $(this).attr('data-slc');
		$(slc_val).slideToggle();
        if($(slc_val).is( ":visible" )){
        	//$(document.body).addClass("modal-backdrop");
            $(document.createElement('div')).addClass('modal-backdrop fade show').appendTo($(document.body));
            $(".modal-backdrop").click(function () {
                $(slc_val).slideUp();
				$(this).remove();
            });
		}
	});

	login_height = $('.login_box_wrapper').height();
	$('.login_box_wrapper').css('margin-top', (login_height)*-.5);
	del_meg_height = $('.del_back_wrapper .row').height();
	$('.del_back_wrapper .row').css('margin-top', (del_meg_height)*-.5);

	//키패드 입력
    $(".numpad_wrapper").find('a').click(function () {
        var keyValue = $(this).attr("data-id");
        var pwdValue = $("#password").val();
        switch (keyValue){
            case "reset":
                $(".pwd_wrapper").find(".nempty").removeClass("nempty");
                $("#password").val("");
                $("#password_confirm").val("");
                break;
            case "back":
                pwdValue = pwdValue.substr(0,pwdValue.length-1);
                $(".pwd_wrapper").find(".nempty").last().removeClass("nempty");
                $("#password").val(pwdValue);
                break;
            default:
                pwdValue = pwdValue + keyValue;
                if($(".pwd_wrapper").find(".nempty").length == 0){
                    $(".pwd_wrapper").find(".pwd").first().addClass("nempty");
                }else{
                    $(".pwd_wrapper").find(".nempty").last().next().addClass("nempty");
                }
                $("#password").val(pwdValue);
                break;
        }
        if($("#password").val().length == 4 ){
            passwordOk(pwdValue);
            //submit();
        }
    });

	$('.header').find('.back').click(function(){
        if($(this).attr('data-toggle') == undefined) {
            history.back();
        }
	});

    $('.header').find('.typ_icon').click(function(){
        //설정화면으로
		location.href = '/451.php';
    });


});

function startProgress(){

    $(document.createElement('div')).addClass('modal-backdrop fade show').appendTo($(document.body));

    $(document.createElement('div')).addClass('loader').append(document.createElement('span')).append(document.createElement('span')).append(document.createElement('span')).append(document.createElement('span')).appendTo($(document.body));

}

function stopProgress(){

    $(".modal-backdrop").remove();
    $(".loader").remove();
}

//Chart.defaults.global.tooltips.enabled = false;
try {
	var ctx = document.getElementById('htweather').getContext('2d');
} catch (e) {

}

var chartData = {
	labels: ["수", "목", "금", "토", "일", "월", "화"],
	datasets: [{
		backgroundColor: 'transparent',
		borderColor: 'rgb(255, 99, 132)',
		data: [55, 52, 54, 53, 53, 54, 55],
	}]
};

var chartOption = {
	legend: {
		display: false,
	},
	scales: {
		xAxes: [{
			gridLines: {
				display: false,
				color: "#ccc"
			},
			scaleLabel: {
				display: false,
			},
			ticks: {
				//display: false,
			}
		}],
		yAxes: [{
			gridLines: {
				display: false,
				color: "#ccc",
				borderDash: [1, 3],
			},
			scaleLabel: {
				display: false,
			},
			ticks: {
				display: false,
				suggestedMin: 50,
				suggestedMax: 59
			}
		}]
	}
};

try {
	var chart = new Chart(ctx, {
		type: 'line',
		data: chartData,
		options: chartOption
	});
}catch(e){}

function createHash(pw) {
    var crypto = require('crypto');
    var shasum = crypto.createHash('sha256');
    shasum.update(pw);
    var output = shasum.digest('hex');
    console.log('crypto_hash : ', output);
    return output;
}

function makeCategory(categoryBox, isList) {
	var viewAll = '';
	var active = Array();
	if(isList){
		viewAll = '\t<li><a href="javascript:void(0);" class="active">전체 보기</a></li>\n';
    }else{
		active["01000"] = ' class="active" ';
	}

    doAjax('/itvApi/commonInfo/counselCategory', 'GET', null, function(response){
		var ss = "";
        var slcov_cate = '\n' +
            '<ul id="slcov_cate" class="select_over">' +
            viewAll;
		$.each(response["content"], function (index, value) {
            slcov_cate += '\t<li><a href="javascript:void(0);" data-id="'+value["counselCategoryId"]+'" '+active[value["counselCategoryId"]]+' >'+value["counselCategoryNm"]+'</a></li>\n'
		});
        slcov_cate += '</ul>';
        categoryBox.html(slcov_cate);

        $("#slcov_cate").find("a").click(function () {
            var categoryTitle = $(this).html();
            var category = $(this).attr('data-id');
            actionAfterSelectCate(category, categoryTitle);

            $("#slcov_cate").find("a").removeClass("active");
            $(".slcov_cate_header").text($(this).text());
            $(this).addClass("active");

            //코드는 data-code 나 data-id 로 처리
            //코드 처리 하여 ajax처리

            $('.modal-backdrop').remove();
            $("#slcov_cate").slideUp();
        });
	}, false);
}

Date.prototype.format = function(f = null) {
    if (!this.valueOf()) return " ";
    if (f == null) {
        f = "yyyy년 MM월 dd일 a/p hh:mm";
    }

    var weekName = ["일요일", "월요일", "화요일", "수요일", "목요일", "금요일", "토요일"];
    var d = this;

    var out = f.replace(/(yyyy|yy|MM|dd|E|hh|mm|ss|a\/p)/gi, function($1) {
        switch ($1) {
            case "yyyy":
                return d.getFullYear();
            case "yy":
                return (d.getFullYear() % 1000).zf(2);
            case "MM":
                return (d.getMonth() + 1).zf(2);
            case "dd":
                return d.getDate().zf(2);
            case "E":
                return weekName[d.getDay()];
            case "HH":
                return d.getHours().zf(2);
            case "hh":
                return ((h = d.getHours() % 12) ? h : 12).zf(2);
            case "mm":
                return d.getMinutes().zf(2);
            case "ss":
                return d.getSeconds().zf(2);
            case "a/p":
                return d.getHours() < 12 ? "오전" : "오후";
            default:
                return $1;
        }
        ;
    });
    var dt = new Date();
    if(dt.getFullYear() == d.getFullYear()) {
        out = out.replace(/.*년 /gi, '');
    }
    return out;
};

String.prototype.string = function(len){var s = '', i = 0; while (i++ < len) { s += this; } return s;};
String.prototype.zf = function(len){return "0".string(len - this.length) + this;};
Number.prototype.zf = function(len){return this.toString().zf(len);};
