
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        
         .table{
         width: 1000px;
         }

       
        .tt{
            font-size: 20px;
            color:orange;
        }
       
        
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <center>
         <img src="/image/fg.jpg" width="200px" height="170px">
     </center>
    </br>
     <center>
     <a href="/rhome">
     <button class="btn btn-primary">Back</button>
    </a>
    </center>
    </br>
   
<center>
    <table class="table table-striped table-hover">
        <th class="tt">id</th>
        <th class="tt">code</th>
        <th class="tt">subject</th>
        <th class="tt">grade</th>
        <th class="tt">quentity</th>

        @foreach($subjects as $task)
        
             <tr>
                  <th>{{$task->id}}</th>
                  <th>{{$task->code}}</th>
                  <th>{{$task->subject}}</th>
                  <th>{{$task->grade}}</th>
                  <th>{{$task->quentity}}</th>

                
            </tr>
          
        @endforeach
    </table>
</center>
</body>
</html>


