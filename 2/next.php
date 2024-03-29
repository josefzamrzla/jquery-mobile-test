<!DOCTYPE html>
<html lang="cs-cz">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../jquery/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet" media="all" type="text/css" href="../jquery/jquery.mobile-1.0.1.min.css" />
    <link rel="stylesheet" media="all" type="text/css" href="../jquery/custom.css" />
    <script type="text/javascript" src="../jquery/jquery.mobile-1.0.1.min.js"></script>
</head>
<body>

<div id="next" data-role="page">
    <div data-role="header">
        <h1>header - next page</h1>
        <div id="nextnavbar" data-role="navbar">
            <ul>
                <li><a href="./" data-icon="arrow-l">main page</a></li>
                <li><a href="./?param" data-icon="arrow-l" data-prefetch="true">main page with param</a></li>
                <li><a href="next.php" data-icon="arrow-r" data-prefetch="true">next page</a></li>
            </ul>
        </div>
    </div>
    <div data-role="content">
        &lt;div id="form" class="form"&gt;<div id="form" class="form">[myNextForm]</div>&lt;/div&gt;<br />

        <a data-role="button" onclick="$('.form').each(function(id, data){alert(data.id);})">Show all element IDs with class 'form'</a>
        <a data-role="button" onclick="alert($('#form').html())">Show content of element with ID 'form'</a>
        <a data-role="button" onclick="$('.form').each(function(id, data){alert($(data).html());})">Show contents of each element with class 'form'</a>
        <a data-role="button" onclick="$('#next .form').each(function(id, data){alert($(data).html());})">Show contents of each element selected by: '#pageID .form'</a>
        <a data-role="button" onclick="$.mobile.activePage.find('.form').each(function(id, data){alert($(data).html());})">Show contents of each element found by $.mobile.activePage</a>

    </div>
    <div data-role="footer" data-position="fixed"><h2>footer</h2></div>


</div>


</body>
</html>