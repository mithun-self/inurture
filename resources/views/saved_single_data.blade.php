@include('menu')
<head>
  <title>Saved Course</title>
</head>
<body>

<div class="container">
  <h2>Saved Course View</h2>
  <ul class="list-group">
    <li class="list-group-item">Course Id: <span style="text-align: right;font-weight: bold;" class="">{{$record->real_id}}</span></li>
    <li class="list-group-item">Course Name: <span style="text-align: right;font-weight: bold;" class="">{{$record->name}}</span></li>
    <li class="list-group-item">Course Type: <span style="text-align: right;font-weight: bold;" class="">{{$record->type}}</span></li>
  </ul>
</div>

</body>
