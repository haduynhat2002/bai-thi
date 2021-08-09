<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script src="{{url('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>
    <script src="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js')}}}"></script>
</head>
<body>

<div>
    <table class="table">
        <thead>
        <tr>
            <th>Book Id</th>
            <th>authorid</th>
            <th>title</th>
            <th>ISBN</th>
            <th>pub_year</th>
            <th>available</th>
        </tr>
        </thead>g
        <tbody>
        @foreach($list as $Book)
            <tr>
                <td>{{$Book->bookid}}</td>
                <td>{{$Book->authorid}}</td>
                <td>{{$Book->title}}</td>
                <td>{{$Book->ISBN}}</td>
                <td>{{$Book->pub_year}}</td>
                <td>{{$Book->available}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
