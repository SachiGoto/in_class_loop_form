<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>3 Big Form Process</title>
        <style>
            img {  
                width:300px; height:auto; 
            }
            h1 {
                text-align:center;
            }
            .container {
                position:relative; width:500px; 
                margin-left:auto; margin-right:auto;
                background:gray; border:solid 1px black; padding:20px;
            }
        </style>
    </head>
    <body>
        <h1>PHP Process Data</h1>
        
        <?php
       
           if(isset($_POST["form_submit"])){

            
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $gender = $_POST["gender"];
            $color =  $_POST["color"];
            $hobby =  $_POST["hobby"];
            $country =$_POST["country"];
           



            echo "<div style= background-color:$color class='container'>";


            if(empty($firstName)){
                echo "<h1> Hello, " . $lastName ."</h1>" ;
            }else if(empty($lastName)){
                echo "<h1> Hello, " . $firstName . "</h1>" ;
            }else if((empty($lastName) && empty($firstName) )){
            echo "<h1> Hello Newcomver </h1>";
            }else{
              echo  "<h1> Hello, " .$firstName . " " .$lastName ."</h1>";

            }


            if($_POST["gender"] === "Female"){
            
                echo "<p> Mrs. " .$firstName ." " . $lastName ."</p>";
              
                // echo  $gender ;

            }else{
                echo "<p> Mr. " .$firstName ." " . $lastName ."</p>";
            // echo  $gender ;
            }
            
   
          
           
            // echo  var_dump($hobby );
            if(count($hobby) == 1){
            echo "You enjoy 1 hobby";
            echo "<p>  In particular, you like </p> ";
            echo "<ul><ol> " . strtoupper($hobby[0]) . "</ol></ul>";
            }else if(count($hobby)>1){
                echo "You enjoy " . count($hobby) . " hobbies";
                echo "<p>  In particular, you like </p> <ul>";
                $i=0;
                while($i<count($hobby)){
                 echo "<ol> " . strtoupper($hobby[$i]) . "</ol>";
                 $i++;

                }
                echo "</ul>";
            }else{
                echo " You have no hobbies" ;
            }

            // echo var_dump($country);
           
            switch ($country){
             
                case "Canada":
                echo "<p> You are from Canada! </p>" ;
                echo "<img src='https://upload.wikimedia.org/wikipedia/commons/d/d9/Flag_of_Canada_%28Pantone%29.svg'>";


                break;

                case "Japan":
                    echo "<p>You are from Japan! </p>";
                    echo "<img src='https://upload.wikimedia.org/wikipedia/en/thumb/9/9e/Flag_of_Japan.svg/1200px-Flag_of_Japan.svg.png'>";
                    
                    break;

                case "India":
                    echo "<p> You are from India! </p>";
                    echo "<img src='https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/1200px-Flag_of_India.svg.png'>";
                    break;

                case "Nigeria":
                    echo "<p>You are from Nigeria! </p>";
                    echo "<img src='https://upload.wikimedia.org/wikipedia/commons/thumb/7/79/Flag_of_Nigeria.svg/800px-Flag_of_Nigeria.svg.png'>";

                    break;

                case "The United States":
                    echo "<p>You are from The United States! </p>";
                    echo "<img src='https://upload.wikimedia.org/wikipedia/en/thumb/a/a4/Flag_of_the_United_States.svg/1200px-Flag_of_the_United_States.svg.png'>";
                    break;

                case "Other";
                    break;

            }

          
           
            // if(!empty("others")){
             
            //     $others = $_POST['others'];
            
            //    echo $others;

            // }else{
            //     "no Value";
            // }


            $others = $_POST["others"];

            if(isset($others)){
                echo $others;
            }

        

            

            echo "</div>";

           
        }else{
            echo "the data is not send correctly" ;
            echo "<a href='big_form.php'> Fill out the form again</a>";
           

           
        }

      
        ?>
        </div>
    </body>
</html>