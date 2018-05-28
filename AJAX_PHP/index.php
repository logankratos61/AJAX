<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Search Box</title>
     <link  rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css"> //Bootstarp theme taken form bootswatch.com.
     <script>
        function showSuggestion(str){
               
            if(str.length == 0){
                document.getElementById('output').innerHTML = '';
            }else{
                //AJAX REQUEST
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "suggest.php?q="+str, true );
                xhr.onload = function(){
                    if(this.status==200){
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xhr.send();
            }   

             }
     </script>
</head>
<body>
<div class="container">

    <h1>Search User</h1> 
    <br><br>
    <form>
    Search user <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">
    </form>
    <br><br>
    <p>Suggetions: <span id="output" style="font-weight:bold"></span></p>
    </div>
    
</body>
</html>
