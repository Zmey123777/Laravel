<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.6.3/css/all.min.css"/>
<link rel="stylesheet" href="{{ asset('css/all.css') }}">

<html>
<head>
    <title>All</title>
</head>
<body>
<br/>
@foreach ($data as $item)
    @if($item[1])
        <span class="far fa-folder-open"  style="margin-left:{{$item[2]*20}}"> {{basename($item[0])}}<br/></span>
    @else
        <form method="post" action="/md">
            @csrf
            <input type="hidden" name="filePath" value="{{$item[0]}}">
            <input  type="submit" class="bi bi-filetype-md" style="margin-left:{{$item[2]*20}}" value="{{ basename($item[0]) }}">
        </form>
    @endif
@endforeach
</body>
</html>
