<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           background-color: #1e1e1e;
        }
        .section{
            width: 97vw;
            
            color:#00bfff;
            text-align:center;
            border-radius:10px;
            padding:3px 0px;
            border:1px solid white;
            
            
        }
        .section p{
            color:white;
        }
        .content{
            display:flex;
             background-color:#252526;
             
        }
        .left{
            background-color:#252526;
            width: 48vw;
            margin:5px 5px;
            height:80vh;
            border:1px solid grey;
            border-radius:5px; 
        }
        .l_content{
            border:1px solid grey;
            hieght:80vh;
        }
        .editor{
            background-color:#252526;
            color:white;
            width:99%;
            height:60vh;
            border-radius:5px;
            font-size:15px;
        }
        .btn1{
            background-color:green;
            border-radius:5px;
            border:none;
            margin:8px;
            padding:10px;
            width:80px;
            color:white;
        }
        .btn2{
            background-color:red;
        }
       
         .right{
            background-color:white;
            width: 49vw;
            margin:5px 5px;
            height:80vh;
             border:1px solid grey;
            border-radius:5px;
        }
        nav{
          background-color:#1e3A8A;
            color:white;
            padding:6px;
            border-radius:5px;
            margin:5px;
        }
        #r{
             background-image:linear-gradient(to right,#5C2ECF,#B92D92);
            color:white;
            padding:6px;
            border-radius:5px;
            margin:5px;

        }
        .output{
            height: 68vh;
            border:1px solid grey;
            margin:5px;
            border-radius:5px;
        }
        .bottom{
            text-align:center;
            color:blue;
            width:97vw;
            border:1px solid grey;
            border-radius:10px;
            margin:5px;
        }



    </style>
</head>
<body>
    <header class="section">
        <h2>HTML RUNNER</h2>
        <p>Write Html Code and See Output</p>

    </header>
    <main class="content">
        <div class="left">
            <nav><h3>HTML CODE</h3></nav>
            <div class="l_content">
                <form method="get">
                   <textarea name="code" class="editor"></textarea>
                
            </div>
            <footer><input class="btn1" type="submit" name="btn"value="RUN">
        <input class="btn1 btn2" type="reset"name="reset"value="CLEAR">
        </form>
    </footer>
        </div>
        <div class="right">
            <nav id="r"><h3>OUTPUT</h3></nav>
            <div class="output">
                <?php
                if(isset($_GET['btn']))
                    {
                      $code = $_GET['code'];
                      echo $code;
                    }
                ?>
            </div>
        </div>
        

    </main>
    <footer class="bottom">
    <h4>HAPPY CODING</h4>

    </footer>


    
    
    
</body>
</html>