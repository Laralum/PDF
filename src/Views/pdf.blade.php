<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Source+Sans+Pro:300,400" rel="stylesheet">
    <style media="screen">
        body,h1,h2,h3,p,span {
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 300;
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
            bottom: -100px;
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
            <div class="left">Laralum Administration Panel</div>
            <div class="right">Èrik Campobadal</div>
            <hr />
        </div>
        <div id="footer">
            <span class="current-page"></span>
        </div>

@php
$text = "
# 1 - Testing PDF Output
## 1.1 - An intrdocutrory tutorial made for you

Depending on the document, you might want to do simple PDF output, well, this is for you all then

It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

1. Simple markdown control
2. Simple instructions

**Never felt that easy**

It's also very intuitive *yes* very intuitive!

```
body,h1,h2,h3,p,span {
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 300;
}
p {
  text-align:justify;
  text-justify:inter-word;
}
code {
  color: #424242;
}
```

# Testing PDF Output
## An intrdocutrory tutorial made for you

Depending on the document, you might want to do simple PDF output, well, this is for you all then

- Simple markdown control
- Simple instructions

**Never felt that easy**

It's also very intuitive *yes* very intuitive!

```
alert('Hey bois');
```

![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png)
";
@endphp

         {!! GrahamCampbell\Markdown\Facades\Markdown::convertToHtml($text) !!}
         <span class='page-break'></span>
         asdasd
    </body>
</html>
