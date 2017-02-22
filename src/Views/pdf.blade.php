<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    {{-- Fonts --}}
    <style media="screen">
        h1{
            font-family: 'Roboto', sans-serif;
        }
        p{
            font-family: 'Roboto', sans-serif;
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
        @page { margin: 120px 50px; }
        #header {
            position: fixed;
            left: 0px;
            top: -100px;
            right: 0px;
            height: 50px;
            text-align: center;
        }


        .header-logo {
            max-height: 60px;
            max-width: 60px;
        }

        #footer {
            position: fixed;
            left: 0px;
            bottom: -100px;
            right: 0px;
            height: 50px;
            text-align: center;
        }

        #footer .current-page:after {
            content: counter(page); /* You can outpus as content: counter(page, upper-roman); */
        }
        #footer .total-pages:after {
            content: counter(all); /* You can outpus as content: counter(page, upper-roman); */
        }
    </style>


    </head>
    <body>

        <div id="header">
                <img class="header-logo" src="https://avatars1.githubusercontent.com/u/22253051?v=3&s=200">
                <span class="header-text"><p>Laralum PDF</p></span>
        </div>
        <div id="footer">
            <p>Page <span class="current-page"></span></p>
        </div>

         {!! GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($text) !!}

    </body>
</html>
