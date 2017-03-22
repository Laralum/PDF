<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <style media="screen">
        body,h1,h2,h3,p,span {
            font-family: 'Nunito Sans', sans-serif;
        }
        p {
            text-align:justify;
            text-justify:inter-word;
        }
        code {
            color: #424242;
            font-family: 'Source Code Pro', monospace;
        }
    </style>

    {{-- page-break --}}
    <style>
        .page-break {
            page-break-after: always;
        }
    </style>

    {{-- header & footer --}}
    <style>
        @page { margin: 20mm 20mm; }
        #header {
            position: fixed;
            left: 0px;
            top: -40px;
            right: 0px;
            height: 50px;
        }


        .header-logo {
            max-height: 50px;
            max-width: 50px;
        }

        #footer {
            position: fixed;
            left: 0px;
            bottom: -80px;
            right: 0px;
            height: 50px;
            text-align: right;
        }

        #footer .current-page:after {
            content: counter(page); /* You can outpus as content: counter(page, upper-roman); */
        }
        #footer .total-pages:after {
            content: counter(all); /* You can outpus as content: counter(page, upper-roman); */
        }
        .left {
            float: left;
        }
        .right {
            float: right;
        }

    </style>


    </head>
    <body>

        <div id="header">
                &nbsp;
            <div class="left">{{ \Laralum\Settings\Models\Settings::first()->appname }}</div>
            <div class="right"></div>
            <hr />
        </div>
        <div id="footer">
            <span class="current-page"></span>
        </div>
         {!! $text !!}
    </body>
</html>
