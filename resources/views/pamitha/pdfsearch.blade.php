<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .pdf{
            width:800px;
            border: 4px solid orange;
        }
          h2{
              background-color: orange;
              height: 40px;
        }
        th{
              font-size:20px;
        }
        .df{
           border: 1px black;
        }
        .view{
              background-color: rgb(214, 49, 192);
              width:100px;
              height:25px;
              border-radius: 15px;
        }
        .view:hover{
            background-color: green;
        }
       .download{
            background-color: rgb(214, 49, 192);
            width:100px;
            height:25px;
            border-radius: 15px;
       }
       .download:hover{
            background-color: green;   
       }
       .back{
           padding:50px;
       }
       
    </style>
  <script>
       function fun(){
	       swal("Download Success !", "Click the OK button", "success");
	   }
   </script>
</head>
<body>
    
    <div class="back">
    <a href="/pdfR">
    <img src="/image/back.jpg" width="40px" height="40px">
    </a>
    </div>
<center>
    <div class="pdf">
  <table>
  
 @foreach($subjects as $task)
 <h2>grade {{$task->grade}}</h2>
      <tr>
           <th>subject :</th><th>{{$task->subject}}</th>
      </tr>
      <tr>
           <th>description :</th><th>{{$task->description}}</th>
      </tr>
      <tr>
           <th>PdF :</th><th>{{$task->file}}</th>
          
     </tr>
     <tr>
                  <th>
                  <a href="/view/{{$task->id}}">
                  <button class="btn btn-primary">View <ion-icon name="eye-outline"></ion-icon></button>
                  </a>
                  </th>
                  <th>
                  <a href="/download/{{$task->file}}">
                  <button class="btn btn-primary" onclick="fun()">Download <ion-icon name="cloud-download-outline"></ion-icon></button>
                  </a>
                  </th>
           </tr>
   
 @endforeach
    </br>
  </table>
    </br>
    </div>
</center>
</body>
</html>