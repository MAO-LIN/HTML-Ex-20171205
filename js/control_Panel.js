function remove($flag) {
    var txt;
    var r = confirm("你確認要刪除嗎?");
    if (r) {
        txt = "你按下確定";
        alert(txt);
    } else {
        txt = "你按下取消";
        alert(txt);
    }
}