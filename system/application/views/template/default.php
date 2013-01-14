<html>
<head>
    <link type="text/css" rel="stylesheet" media="screen" href="/css/all.css">

<title>
    <?php echo @$title; ?>
</title>
</head>

<body>

<div id="div_everything_wrapper">

    <div id="div_topbar_wrapper">
        HEADER
        <?php echo @$top_bar_view; ?>
    </div>

    <div class="break">
    </div>

    <div id="div_torso_wrapper">

        <div id="div_navigation_menu">
            <?php echo @$main_menu_view; ?>
        </div>

        <div id="div_main_content">
            <?php echo @$main_content_view;  ?>
        </div>

    </div>

    <div class="break">
    </div>

    <div id="div_footer_wrapper">
        FOOTER
    </div>
</div>


</body>
</html>