<?php
$conn =  mysqli_connect("localhost","root","","ARTSTORE");
// $sql = "CREATE table art(
//         id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
//         file varchar(1000) NOT NULL,
//         topic varchar(100) NOT NULL,
//         price int(200) NOT NULL,
//         type varchar(100) NOT NULL,
//         pieces int(10) NOT NULL,
//         description longtext NOT NULL
//     )";

// $sql = "CREATE table orderdetails(
//     id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
//     fullname varchar(100) NOT NULL,
//     address varchar(500) NOT NULL,
//     phone int(10) NOT NULL,
//     email varchar(200) NOT NULL,
//     image_id int(100) NOT NULL,
//     image_name varchar(500) NOT NULL,
//     payment varchar(100) NOT NULL,
//     Date date NOT NULL,
//     FOREIGN KEY (image_id) REFERENCES art(id)

// )";

// CREATE TABLE testimonial(
// 	id  int NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     name varchar(100) NOT NULL,
//     message varchar(1000) NOT NULL
// );

// $sql = "CREATE table homepage(
//         id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
//         file varchar(1000) NOT NULL,
//         topic1 varchar(100) NOT NULL,
//         topic2 varchar(100) NOT NULL,
//         description longtext NOT NULL
//     )";
$sql = "CREATE table about(
        id int NOT NULL AUTO_INCREMENT  PRIMARY KEY,
        file varchar(1000) NOT NULL,
        topic varchar(100) NOT NULL,
        description longtext NOT NULL
    )";


$result = mysqli_query($conn,$sql);
if($result){
    echo "Table created";
}else{
    echo"Table not connected".mysqli_error($conn);
}



?>