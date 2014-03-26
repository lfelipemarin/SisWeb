<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>#TITLE#</title>
        <style type="text/css">
            <!--
            body {
                font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
                background-color: #42413C;
                margin: 0;
                padding: 0;
                color: #000;
            }
            /* ~~ Element/tag selectors ~~ */
            ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
                padding: 0;
                margin: 0;
            }
            h1, h2, h3, h4, h5, h6, p {
                margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing block. The remaining bottom margin will hold it away from any elements that follow. */
                padding-right: 15px;
                padding-left: 15px; /* adding the padding to the sides of the elements within the blocks, instead of the block elements themselves, gets rid of any box model math. A nested block with side padding can also be used as an alternate method. */
            }
            a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
                border: none;
            }
            /* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
            a:link {
                text-decoration: none;
                color: #235a81;
                cursor: pointer;
                outline: none; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
            }
            a:visited {
                text-decoration: none;
                color: #235a81;
                cursor: pointer;
                outline: none;
            }
            a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
                text-decoration: none;
                color: #235a81;
                cursor: pointer;
                outline: none;
            }
            /* ~~ This fixed width container surrounds all other blocks ~~ */
            .container {
                width: 960px;
                background-color: #FFFFFF;
                margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
            }
            /* ~~ The header is not given a width. It will extend the full width of your layout. ~~ */
            header {
                background-color: #ADB96E;
            }
            /* ~~ These are the columns for the layout. ~~ 
            
            1) Padding is only placed on the top and/or bottom of the block elements. The elements within these blocks have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the block itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the block element and place a second block element within it with no width and the padding necessary for your design.
            
            2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a block set to float right). Many times, padding can be used instead. For blocks where this rule must be broken, you should add a "display:inline" declaration to the block element's rule to tame a bug where some versions of Internet Explorer double the margin.
            
            3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar blocks could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.
            
            4) If you prefer your nav on the left instead of the right, simply float these columns the opposite direction (all left instead of all right) and they'll render in reverse order. There's no need to move the blocks around in the HTML source.
            
            */
            .sidebar1 {
                float: left;
                width: 180px;
                background-color: #EADCAE;
                padding-bottom: 10px;
            }
            .content {
                padding: 10px 0;
                width: 600px;
                float: left;
            }
            aside {
                float: left;
                width: 170px;
                background-color: #EADCAE;
                padding-top: 10px;
                padding-right: 0;
                padding-bottom: 10px;
                padding-left: 0;
            }

            /* ~~ This grouped selector gives the lists in the .content area space ~~ */
            .content ul, .content ol {
                padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
            }

            /* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
            ul.nav {
                list-style: none; /* this removes the list marker */
                border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
                margin-bottom: 15px; /* this creates the space between the navigation on the content below */
            }
            ul.nav li {
                border-bottom: 1px solid #666; /* this creates the button separation */
            }
            ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
                padding: 5px 5px 5px 15px;
                display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
                width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
                text-decoration: none;
                background-color: #C6D580;
            }
            ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
                background-color: #ADB96E;
                color: #FFF;
            }

            /* ~~ The footer ~~ */

            /*<--------------------------------FOOTER---------------------------->*/
            footer {
                padding: 10px 0;
                background-color: #CCC49F;
                position: relative;/* this gives IE6 hasLayout to properly clear */
                clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
                left: 0;
                width: 100%;
                background: #222;
            }


            footer div {
                display: table;
                margin: 0 auto;
                padding: 44px 0;
                width: 940px;
                color: #777;
            }

            footer div section {
                display: table-cell;
                width: 300px;
            }

            footer div #about, footer div #blogroll {
                padding-right: 20px;
            }

            footer h3 {
                color: #FFF;
            }

            footer a {
                color: #999;
            }

            footer a:hover {
                color: #FFF;
                text-decoration: none;
            }

            footer ul {
                margin: 0 0 0 40px;
                list-style: square;
                color: #565656;
            }

            footer ul li a {
                display: block;
            }
            /* ~~ Miscellaneous float/clear classes ~~ */
            .fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
                float: right;
                margin-left: 8px;
            }
            .fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
                float: left;
                margin-right: 8px;
            }
            .clearfloat { /* this class can be placed on a <br /> or empty block element as the final element following the last floated block (within the .container) if the footer is removed or taken out of the .container */
                clear:both;
                height:0;
                font-size: 1px;
                line-height: 0px;
            }

            /*HTML 5 support - Sets new HTML 5 tags to display:block so browsers know how to render the tags properly. */
            header, section, footer, aside, article, figure {
                display: block;
            }
            -->
        </style>
        <link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="container">
            <header>
                <h1 style="text-decoration:none; border:0; width:89px; height : 76px; margin : 0; padding : 0;   
                    background : url(app/views/images/logo.jpg) no-repeat 0 0;" >
                    <a href="#" style="display : block; height : 76px; text-indent : -9999px; "></a>
                </h1>
            </header>

            <div id="TabsApp" class="TabbedPanels">
                #TABS#
                <div class="TabbedPanelsContentGroup">
                    <div class="TabbedPanelsContent">
                        <div class="sidebar1">
                            #SIDEBAR1#
                            <!-- end .sidebar1 -->
                        </div>
                        <article class="content">
                            <section>
                                #CONTENT1#
                            </section>
                            <!-- end .content -->
                        </article>
                        <aside>
                            #RIGHTSIDE#
                        </aside>
                    </div>
                    <div class="TabbedPanelsContent">
                        <div class="sidebar1">
                            #SIDEBAR1#
                            <!-- end .sidebar1 -->
                        </div>
                        <article class="content">
                            <section>
                                #CONTENT2#
                            </section>
                            <!-- end .content -->
                        </article>
                        <aside>
                            #RIGHTSIDE#
                        </aside>
                    </div>
                    <div class="TabbedPanelsContent">
                        <div class="sidebar1">
                            #SIDEBAR1#
                            <!-- end .sidebar1 -->
                        </div>
                        <article class="content">
                            <section>
                                #CONTENT3#
                            </section>
                            <!-- end .content -->
                        </article>
                        <aside>
                            #RIGHTSIDE#
                        </aside>
                    </div>
                </div>
            </div>

            <!-- end .container -->
        </div>
        <footer>
            #FOOTER#
        </footer>
        <script type="text/javascript">
            var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabsApp");
        </script>
    </body>
</html>
