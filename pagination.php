<?php

$resultPerPage = 10;


if(empty($_GET['page'])){
    $_GET['page'] = 0;
}

$stmt1 = $conn->query("SELECT * FROM users01");
echo "<br /> All users is: " . $stmt1->rowCount() . "<br>";
$pages = ceil($stmt1->rowCount() / $resultPerPage); 
$from = $_GET['page'] * 10;
$curentPage = $_GET['page'] + 1;
$curentPageIndex = $_GET['page'];
$backPage = $_GET['page'] - 1;


if($pages > 7 && ($curentPage <= 3)){
    $lastPageIndex = $pages-1;   
    
    echo "<div id='pagCen'>";

    echo "<a href='index.php?page=0' class='pagination'>" 
    . 1 . "</a>" ;    

    echo "<a href='index.php?page=1' class='pagination'>" 
    . 2 . "</a>" ;

    echo "<a href='index.php?page=2' class='pagination'>" 
    . 3 . "</a>" ;

    echo "<a href='index.php?page=3' class='pagination'>" 
    . 4 . "</a>" ;    

    echo "<span>...</span>";

    echo "<a href='index.php?page=$lastPageIndex' class='pagination'>" 
    . $pages . "</a>" ;

    echo "<a href='index.php?page=" . $curentPage . "' class='pagination'>" 
    . '>' . "</a>" ;

    echo "</div>";
}



if($pages > 7 && ($curentPage > 3) && ($curentPage < ($pages -2))){
    $lastPageIndex = $pages-1;    
    $nextPage = $curentPage + 1;
    $nextPageIndex = $curentPage;
    $prevPage = $curentPage - 1;
    $prevPageIndex = $curentPage - 2;
    echo "<div id='pagCen'>";

    echo "<a href='index.php?page=" . $backPage ."' class='pagination'>" 
    . '<' . "</a>" ;
    
    echo "<a href='index.php?page=0' class='pagination'>" 
    . 1 . "</a>" ;

    echo "<span>...</span>";

    echo "<a href='index.php?page=$prevPageIndex' class='pagination'>" 
    . $prevPage . "</a>" ;

    echo "<a href='index.php?page=$curentPageIndex' class='pagination'>" 
    . $curentPage . "</a>" ;

    echo "<a href='index.php?page=$nextPageIndex' class='pagination'>" 
    . $nextPage . "</a>" ;

    echo "<span>...</span>";

    echo "<a href='index.php?page=$lastPageIndex' class='pagination'>" 
    . $pages . "</a>" ;

    echo "<a href='index.php?page=" . $curentPage  . "' class='pagination'>" 
    . '>' . "</a>" ;

    echo "</div>";
}

if($pages > 7 && ($curentPage >= ($pages -2))){
    $lastPageIndex = $pages-1;    
    $last1 = $pages-2;
    $last2 = $pages-3;
    $last3 = $pages-4;
    
    echo "<div id='pagCen'>";

    echo "<a href='index.php?page=" . $backPage ."' class='pagination'>" 
    . '<' . "</a>" ;
    
    echo "<a href='index.php?page=0' class='pagination'>" 
    . 1 . "</a>" ;    

    echo "<span>...</span>";

    echo "<a href='index.php?page=$last3' class='pagination'>" 
    . $last2 . "</a>" ;      

    echo "<a href='index.php?page=$last2' class='pagination'>" 
    . $last1 . "</a>" ;

    echo "<a href='index.php?page=$last1' class='pagination'>" 
    . $lastPageIndex . "</a>" ;    
    

    echo "<a href='index.php?page=$lastPageIndex' class='pagination'>" 
    . $pages . "</a>" ;    

    echo "</div>";
}

if($pages <= 7){
    echo "<div id='pagCen'>";
    for($i = 0; $i < $pages; $i++){
        echo "<a href='index.php?page=$i' class='pagination'>" 
    .  ($i + 1) . "</a>" ;
    }
    echo "</div>";
}


echo  "<br>";

$stmt2 = $conn->query("SELECT * FROM users01 LIMIT $from, $resultPerPage");
while($row = $stmt2->fetch()){
    echo $row['id'] . " " . $row['fn'] . " " . $row['ln'] . " - " . $row['c'] . "<br>"; 
}

