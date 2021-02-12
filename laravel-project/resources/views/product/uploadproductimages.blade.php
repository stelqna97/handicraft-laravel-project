<html lang="en">
<head>
  <title>Laravel Multiple File Upload Using Relationship</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
  
  <div class="container">
       
    <h3 class="jumbotron">Laravel Multiple File Upload Using Relationship</h3>
<form method="post" action="{{route('product.images.upload.store')}}" enctype="multipart/form-data">
  {{csrf_field()}}
       <div class=" control-group " >
          <textarea rows="5" cols="3" type="text" name="post" 
             class="form-control"></textarea>
        </div>
        <div class="input-group control-group" >
          <input type="file" multiple="multiple" name="images[]" class="form-control">
          
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>

  </form>        
  </div>

</body>
</html>