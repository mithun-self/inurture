@include('menu')
<head>
    <title>Coursera Saved Data</title>       
</head>
      <body>
         <div class="container">
               <h2>Coursera Saved Data</h2>
            <table class="table table-bordered" id="table">
               <thead>
                  <tr>
                     <th>Course Id</th>
                     <th>Course Name</th>
                     <th>Course Type</th>
                     <th>Actions</th>
                  </tr>
               </thead>
               <tbody>
                @foreach($records as $record)
                  <tr>
                    <td>{{$record->real_id}}</td>
                    <td>{{$record->name}}</td>
                    <td>{{$record->type}}</td>
                    <td><a href="/view/data/{{$record->id}}">View</a></td>
                  </tr>
                @endforeach
               </tbody>
             </table>
         </div>
   </body>
</html>