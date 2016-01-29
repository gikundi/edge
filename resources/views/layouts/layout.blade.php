<!DOCTYPE html>
<html lang="en">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Growth Africa Interview </title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keyword" content="">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->


        <!-- start: CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link id="bootstrap-style" href="{{asset('css/bootstrap.min.css')}}"rel="stylesheet">
        <link href="{{asset('css/bootstrap-responsive.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/auth-buttons.css')}}" rel="stylesheet">
        <link href="{{asset('css/accordion.css')}}" rel="stylesheet">

        <link id="base-style" href="{{asset('css/style.css')}}"rel="stylesheet">
        <link id="base-style-responsive" href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

        <script type="text/javascript">
//<![CDATA[

var accordionItems = new Array();

function init() {

    // Grab the accordion items from the page
    var divs = document.getElementsByTagName('div');
    for (var i = 0; i < divs.length; i++) {
        if (divs[i].className == 'accordionItem')
            accordionItems.push(divs[i]);
    }

    // Assign onclick events to the accordion item headings
    for (var i = 0; i < accordionItems.length; i++) {
        var h2 = getFirstChildWithTagName(accordionItems[i], 'H2');
        h2.onclick = toggleItem;
    }

    // Hide all accordion item bodies except the first
    for (var i = 1; i < accordionItems.length; i++) {
        accordionItems[i].className = 'accordionItem hide';
    }
}

function toggleItem() {
    var itemClass = this.parentNode.className;

    // Hide all items
    for (var i = 0; i < accordionItems.length; i++) {
        accordionItems[i].className = 'accordionItem hide';
    }

    // Show this item if it was previously hidden
    if (itemClass == 'accordionItem hide') {
        this.parentNode.className = 'accordionItem';
    }
}

function getFirstChildWithTagName(element, tagName) {
    for (var i = 0; i < element.childNodes.length; i++) {
        if (element.childNodes[i].nodeName == tagName)
            return element.childNodes[i];
    }
}

//]]>
        </script>

    </head>

    <body>

        @yield('content')


    </body>
</html>