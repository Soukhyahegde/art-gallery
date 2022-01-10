<html>
    <body>
        <?php 
        $authors = array("ABC","XYZ");
        $pattern = $_post["search"];
        for($i=0;$i<count($authors);$i++){
        if(preg_match($pattern, $authors[$i])){
            $myfile = fopen("first_art.html", "r") or die("Unable to open file!");
            fread($myfile,filesize("first_art.html"));
        }
    }
    
    ?>
    </body>
</html>
