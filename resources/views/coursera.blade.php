@include('menu')
<head>
    <title>Coursera Data</title>
            
</head>
      <body>
            <div class="alert alert-success">

            </div>
         <div class="container">
               <h2>Coursera Data</h2>
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
               </tbody>
             </table>
            
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
       <script>
         $(document).ready(function() {
            $.ajax({
              url: "https://api.coursera.org/api/courses.v1",
              success: function(data){
                $.each(data.elements, function(k, v) {
                var newRowContent = "<tr><td>"+v.id+"</td><td>"+v.name+"</td><td>"+v.courseType+"</td><td><button id='save_data' class='glyphicon glyphicon-save'></button></td></tr>";
                $("#table tbody").append(newRowContent);
              });
            },
            });

            $(document).on('click', '#save_data', function(){ 
                var td1 = $(this).closest('tr').children('td:first').text();
                var td2 = $(this).closest('tr').children('td:nth-child(2)').text();
                var td3 = $(this).closest('tr').children('td:nth-child(3)').text();
                $.ajax({
                        url     : "/save/data",
                        type    : 'get',
                        data    : { id: td1 ,name: td2, type: td3},
                        
                });
                $( "div.alert-success" ).html('Course Saved!');
            });

          }); 
         </script>
         </div>
   </body>
</html>