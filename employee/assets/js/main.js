function fetchRemotePage(remotePage, divid, myid){
    $.get(remotePage,function(result){
        $('[id^="menu-"]').removeClass('active');
        $('#'+myid).addClass('active');
        $('#'+divid).html(result);
    });
}


