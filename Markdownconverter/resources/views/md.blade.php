<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="resources/css/markdown.css">
<html>
<head>
    <title>Md method</title>
    <style>
        .markdown-body {
            box-sizing: border-box;
            min-width: 200px;
            max-width: 980px;
            margin: 0 auto;
            padding: 45px;
        }

        @media (max-width: 767px) {
            .markdown-body {
                padding: 15px;
            }
        }
    </style>
</head>
<article class="markdown-body">
{!! Str::markdown($body) !!}
</article>
</html>
