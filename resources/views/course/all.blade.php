<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Courses</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Courses</h2>
        <a href="">Create Course</a>
        <table class="table table-danger table-striped">
            <thread>
                <th>ID</th>
                <th>NAME</th>
                <th>CODE</th>
                <th>TYPE</th>

            </thread>
            <tbody>
                @if($courses)
                   @foreach($courses as $c)
                   <tr>
                       <td>{{ $c->id }}</td>
                       <td>{{ $c->course_name }}</td>
                       <td>{{ $c->course_code }}</td>
                       <td>{{ $c->course_type }}</td>
                   </tr>
                   @endforeach
                @else
                   <tr>
                       <td colspan="4" class="text-center">NO DATA FOUND</td>
                   </tr>
                @endif 
                   
            </tbody>
        </table>

    </div>
</body>
</html>