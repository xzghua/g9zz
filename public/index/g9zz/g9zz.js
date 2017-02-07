/**
 * 妈的!半年没写过js了....忘光了都......
 * Created by ylsc on 17-1-22.
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


/**
 * 回复提交事件
 */
$('.topicSubmit').click(function () {

    var userHref =  $('.userHref').attr('href');
    var userImg = $('.userImg').attr('src');
    var userName = $('.userName').html();
    var topicId = $('.topicId').html();
    var replyCount = $('.replyCount').html();
    var url = $('.topicForm').attr('action');
    var data = {
        "body":getMarkdown(),
        "postId":topicId
    };

    ajaxSubmit(url,data,userHref,userImg,userName);
    removeMarkdown();
    var num = parseInt(replyCount)+parseInt(1);
    $('.replyCount').html(num);
    return false;
});

/**
 * 清除markdown填充的内容
 */
function removeMarkdown() {
    $.proxy(testEditor.toolbarHandlers.clear,testEditor)();
    testEditor.focus();
}


/**
 * 获取markdown内容
 * @returns {*|jQuery}
 */
function getMarkdown() {
    return $('.editormd-markdown-textarea').html();
}

/**
 * 获取markdown编译的html内容
 * @returns {*|jQuery}
 */
function getMarkdownHtml() {
    return $('.editormd-html-textarea').html();
}



/**
 * ajax提交回复内容
 * @param url
 * @param data
 * @param userHref
 * @param userImg
 * @param userName
 */
function ajaxSubmit(url,data,userHref,userImg,userName) {
    $.ajax({
        url:url,
        type:'post',
        sync:true,
        data:data,
        success:function(res){
            if (res.code == '200') {
                toastr.success('操作成功');
                ajaxReply(userImg,userHref,userName,getMarkdown());
            }
        }
    })
}

/**
 * ajax填充回复的样式
 * @param img
 * @param userHref
 * @param username
 * @param content
 */
function ajaxReply(img,userHref,username,content) {

    var html = '<div class="info_code row"> ' +
        '<div class="info_avat col-md-1"> ' +
        '<a href="'+userHref+'">' +
        '<img src="'+img+'" alt="'+username+'"/> ' +
        '</a>' +
        '</div> ' +
        '<div class="info_codeinfo col-md-10"> ' +
        '<div class=""> ' +
        '<span class="label label-info" title="'+username+'">'+username+'</span>' +
        'x楼•好久之前 ' +
        '</div> ' +
        '<div class="">'+content+' </div> ' +
        '</div> ' +
        '<div class="info_replynice col-md-1"> ' +
        '<a href="" data-toggle="tooltip" data-placement="top" title="点赞">' +
        '<span class="glyphicon glyphicon-thumbs-up">' +
        '</span>' +
        '</a> ' +
        '<a href="" data-toggle="tooltip" data-placement="top" title="回复">' +
        '<span class="glyphicon glyphicon-share-alt">' +
        '</span>' +
        '</a> ' +
        '</div>' +
        ' </div>';

    $('.info_content').append(html);
}

/**
 * 点击回复某人......
 */
$('.clickReply').click(function () {
    var reply_user_id =  $(this).find('.reply_user_id').html();
    var reply_user_name =  $(this).find('.reply_user_name').html();

    var html = '@<a href="'+'#'+'" title="'+reply_user_name+'">'+reply_user_name + '</a>'+' '+"\r";
    var html1 = '@'+reply_user_name +  "\r";

    // testEditor.setMarkdown(html);
    testEditor.insertValue(html1);
    testEditor.focus();

});


/**
 * ajax提交附言
 */
$('.appendSubmit').click(function () {
    var append_content = $(this).parent().parent().find('.appendContent').val();
    var topic_id = $('.topicId').html();
    var url = '/appends/'+topic_id;
    var data = {
        "content":append_content
    };

    ajaxAppendSubmit(url,data);

    $(this).parent().parent().find('.appendContent').val('');
    //关闭bootstrap的modal 模态框
    $('#myModal').map(function() {
        $(this).modal('hide');
    });
    return false;
});

/**
 * ajax提交附言的具体动作
 * @param url
 * @param data
 */
function ajaxAppendSubmit(url,data) {
    $.ajax({
        url:url,
        type:'post',
        sync:true,
        data:data,
        success:function(res){
            if (res.status == '200') {
                toastr.success('操作成功');
                ajaxAppend(res);
            }
        }
    })
}

/**
 * ajax插入成功附言的内容
 * @param res
 */
function ajaxAppend(res) {
    var html = '<div class="info_postscript">' +
        '<span>附言/' + getDateDiff(res.append.created_at) +
        '</span>' +
        '<p>' + res.append.content +
        '</p>' +
        '</div>';

    $('.info_operation').before(html);

}

/**
 * 将时间转换成 多长时间之前
 * @param dateTimeStamp
 * @returns {string|*}
 */
function getDateDiff(dateTimeStamp){
    var minute = 1000 * 60;
    var hour = minute * 60;
    var day = hour * 24;
    var halfamonth = day * 15;
    var month = day * 30;
    var now = new Date().getTime();
    var diffValue = now - dateTimeStamp;
    if(diffValue < 0){return;}
    var monthC =diffValue/month;
    var weekC =diffValue/(7*day);
    var dayC =diffValue/day;
    var hourC =diffValue/hour;
    var minC =diffValue/minute;
    if(monthC>=1){
        result="" + parseInt(monthC) + "月前";
    }
    else if(weekC>=1){
        result="" + parseInt(weekC) + "周前";
    }
    else if(dayC>=1){
        result=""+ parseInt(dayC) +"天前";
    }
    else if(hourC>=1){
        result=""+ parseInt(hourC) +"小时前";
    }
    else if(minC>=1){
        result=""+ parseInt(minC) +"分钟前";
    }else
        result="刚刚";
    return result;
}