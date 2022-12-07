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
    <div class='cssmenu'>
        <ul>
            <li class='has-sub'><a><span>Каталог</span></a>
                <ul>
                    @foreach ($data as $el)
                        <li class='has-sub'><a href="/{{ $el }}"><img class="catalogimg" src="/img/jpg&png/categories/{{ $el}}"><span>{{ $el }}</span></a>
                            <ul>


                                        <div>{{ $el }}</div>


                            </ul>

                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
    

</article>
</html>
