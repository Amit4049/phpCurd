<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <section style="padding-top:60px">
    <div class="container">
       <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-header" >
                    ADD POST
          </div>
          <div class="card-body">

          @if(Session::has('post_created'))
              <div class="alert alert-success" role="alert">
              {{Session::get('post_created')}}
              </div>
              @endif




             <form method="POST" action = "{{route('post.create')}}">
          @csrf
          <div class="form-group">
                <label for="title">Post Title</label>
                <input type="text" name="title" class="form-control" placeholder="Post Title" />
                 </div>
                 <div class="form-group">
                    
                    <label for="body">Post Description</label>
                    <textarea name="body" class="form-control" rows="3"></textarea>

                 </div>
              <button type="submit" class="btn btn-success">Add Post</button>
             </div> 
        </div>
     </div>
    </div>
 </div>
     </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>