<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>Create Course</h2>
        <div class="row">
            <div class="col-6 offset-md-3">
            
        <form action="{{ URL::to('/store-course') }}" method="post">
            {{ csrf_field() }}
             <div class="form-group">
               <label for="">Course Name</label>
               <input type="text" class="form-control" name="course_name" id="">
             </div>
                 <div class="form-group">
                   <label for="">Course Code</label>
                   <input type="text" class="form-control" name="course_code" id="">
                 </div>
                <div class="form-group">
                   <label for="">Course Type</label>
                   <select name="course type" class="form-control" id="">
                     <option value="">SELECT TYPE</option>
                     <option value="theory">Theory</option>
                     <option value="lab">Lab</option>
                   </select>
                </div>
               <div class="form-group">
                 <button type="submit" class="btn btn-success">Add</button>
                </div>

        </form>

        </div>
        </div>
       

    </div>
</body>
</html>