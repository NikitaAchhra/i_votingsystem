<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        .circular--portrait {
  position: relative;
  width: 60px;
  height: 60px;
  overflow: hidden;
  border-radius: 50%;
}
.circular--portrait img {
  width: 100%;
  height: 100%;
  background-size: cover;
}
        </style>
    </head>
    <body>
    
    
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">Sr No</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
                @foreach($token[0] as $student)
        
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td>
                            <div class="circular--portrait">
                                <img src="/storage/images/{{$student->user_pic}}" />
                              </div>    
                        </td>
                        <td>{{$student->user_name}}</td>
                        <td>
                            {!! Form::open(['action' => ['ClassElectionController@update',$student->nomclass_id],'method' => 'POST']) !!}

                                <div class="form-group" style="display:none">
                                {{-- <label for="user_name">ID</label> --}}
                                <input type="text" class="form-control" id="user_id" name="user_id"   value={{$token[1]->user_id}}> 
                                </div>
                                <div class="form-group" style="display:none">
                                    {{-- <label for="user_name">ID</label> --}}
                                    <input type="text" class="form-control" id="coun_id" name="coun_id"   value={{$student->coun_id}}> 
                                </div>
                                <div class="form-group" style="display:none">
                                    {{-- <label for="user_name">ID</label> --}}
                                    <input type="text" class="form-control" id="gender" name="gender"   value={{$student->user_gender}}> 
                                </div>
                                {{Form::hidden('_method','PUT')}}
			                    <input type="submit" name="vote" class="btn btn-primary" value="VOTE">
          
                             {!! Form::close() !!}    
                        <td>
                    </tr>
                <?php $i++; ?>
                @endforeach
              
            </tbody>
          </table>

        



    </body>
</html>