<?php 

include 'connection.php';

if(isset($_POST['insert'])){
    // get the values
    $id= $_POST['student_id'];
    $name= $_POST['student_name'];
    $class= $_POST['student_class'];
    
    // insert query
    $query = "INSERT INTO student(id,name,class) VALUES('$id','$name','$class')";

    // check if success or not
    $result = $connection -> query($query);

    if($result){
        header("location: students.php");
    }else {
        echo $connection -> error;
    }

}else if(isset($_POST['update'])){
        // get the values
        $id= $_POST['student_id'];
        $name= $_POST['student_name'];
        $class= $_POST['student_class'];
        
        // update query
        $query = "UPDATE  student SET name='$name', class='$class' WHERE id='$id'";
    
        // check if success or not
        $result = $connection -> query($query);
    
        if($result){
            header("location: students.php");
        }else {
            echo $connection -> error;
        }
}else if(isset($_GET['id'])){
    $student_id  = $_GET['id'];

    $query = "DELETE FROM student WHERE id ='$student_id'";

    $result = $connection -> query($query);

    if($result){
        header("location: students.php");
    }else {
        echo $connection -> error;
    }
}


?>
