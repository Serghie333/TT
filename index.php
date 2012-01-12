<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <style type="text/css">
            body {
                background-color: #000 ;
            }
            
            div.cell {
                width: 40px ;
                height: 40px ;
                float: left ;
                background: url(grass.png) ;
            }
            
            div.map {
                width: 400px ;
                height: 400px ;
                -webkit-transform:rotate(45deg);
                -o-transform:rotate(45deg);
                -moz-transform:rotate(45deg);
                -ms-transform:rotate(45deg);
                margin: 0px auto;
            }
            
            div.main {
                width: 400px ;
                height: 400px ;
                -webkit-transform:rotateX(60deg);
                -o-transform:rotateX(60deg);
                -moz-transform:rotateX(60deg);
                -ms-transform:rotateX(60deg);
                margin: 0px auto;
            }
            
            div.content {
                width: 20px ;
                height: 20px ;
                -webkit-transform:rotate(135deg);
                margin-left: 8px ;
                margin-top: 8px ;
                
            }
            
            div.content1 {
                -webkit-transform:rotate(180deg);
            }
            
            img {
                -webkit-transform:rotateX(0deg);
            }
            
        </style>
    </head>
    <body>
        <br/><br/><br/><br/><br/><br/><br/>
        <div class="main">
        <div class="map">
        <?php
            for($i = 1; $i <= 10; $i++)
            {
                for($j = 1; $j <= 10; $j++)
                    echo'
                            <div class="cell" style="cursor: pointer ;">
                                <div class="content">
                                    <div class="content1">
                                        <img src="tree.png" /> 
                                    </div>    
                                </div>
                            </div>
                    ';
                echo'<br /><br />';
            }
        ?>
        </div>
        </div> 
        
    </body>
</html>
