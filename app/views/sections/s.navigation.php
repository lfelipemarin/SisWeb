<ul>
    <li><a href="#" title="Nav Link 1">Nav Link 1</a></li>
    <li><a href="#" title="Nav Link 1">Nav Link 2</a>
        <ul>
            <li><a href="#" title="Sub Nav Link 1">Sub Nav Link 1</a></li>
            <li><a href="#" title="Sub Nav Link 2">Sub Nav Link 2</a></li>
            <li><a href="#" title="Sub Nav Link 3">Sub Nav Link 3</a></li>
            <li><a href="#" title="Sub Nav Link 4">Sub Nav Link 4</a></li>
            <li class="last"><a href="#" title="Sub Nav Link 5">Sub Nav Link 5</a></li>
        </ul>        
    </li>
    <li><a href="#" title="Nav Link 1">Nav Link 3</a></li>
    <li><a href="#" title="Nav Link 1">Nav Link 4</a></li>
    <li class="last"><a href="#" title="Nav Link 1">Nav Link 5</a></li>
</ul>

<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script>
    (function($) {

        //cache nav
        var nav = $("#topNav");

        //add indicator and hovers to submenu parents
        nav.find("li").each(function() {
            if ($(this).find("ul").length > 0) {
                $("<span>").text("^").appendTo($(this).children(":first"));

                //show subnav on hover
                $(this).mouseenter(function() {
                    $(this).find("ul").stop(true, true).slideDown();
                });

                //hide submenus on exit
                $(this).mouseleave(function() {
                    $(this).find("ul").stop(true, true).slideUp();
                });
            }
        });
    })(jQuery);
</script>
