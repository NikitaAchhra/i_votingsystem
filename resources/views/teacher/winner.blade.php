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
                <th scope="col">Name 1</th>
                <th scope="col">Name 2</th>
                <th scope="col">Council</th>
              </tr>
            </thead>
            <tbody>
                
                @for($i=1;$i<=5;$i++)
                    
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td></td>
                        
                    </tr>
                
                @endfor
              
            </tbody>
          </table>

        



    </body>
</html>