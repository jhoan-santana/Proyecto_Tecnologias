

(function(a){
    a.fn.codexworld_rating_widget = function(p){
        var p = p||{};
        var b = p&&p.starLength?p.starLength:"5";
        var c = p&&p.callbackFunctionName?p.callbackFunctionName:"";
        var e = p&&p.initialValue?p.initialValue:"0";
        var d = p&&p.imageDirectory?p.imageDirectory:"assets";
        var r = p&&p.inputAttr?p.inputAttr:"";
        var f = e;
        var g = a(this);
        b = parseInt(b);
        init();
        g.next("ul").children("img").hover(function(){
            $(this).parent().children("img").css('background-position','0px 0px');
            var a = $(this).parent().children("img").index($(this));
            $(this).parent().children("img").slice(0,a+1).css('background-position','0px -28px')
        },function(){});
        g.next("ul").children("img").click(function(){
            var a = $(this).parent().children("img").index($(this));
            var attrVal = (r != '')?g.attr(r):'';
            f = a+1;
            g.val(f);
            if(c != ""){
                eval(c+"("+g.val()+", "+attrVal+")")
            }
        });
        g.next("ul").hover(function(){},function(){
            if(f == ""){
                $(this).children("img").slice(0,f).css('background-position','0px 0px')
            }else{
                $(this).children("img").css('background-position','0px 0px');
                $(this).children("img").slice(0,f).css('background-position','0px -28px')
            }
        });
        function init(){
            $('<div style="clear:both;"></div>').insertAfter(g);
            g.css("float","left");
            var a = $("<ul>");
            a.addClass("codexworld_rating_widget");
            for(var i=1;i<=b;i++){
                a.append('<img src="assets/estrella.png">')
            }
            a.insertAfter(g);
            if(e != ""){
                f = e;
                g.val(e);
                g.next("ul").children("img").slice(0,f).css('background-position','0px -28px')
            }
        }
    }
})(jQuery);