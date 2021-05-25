<?php
include('../Conn.php');

$fileName = $_POST['img_name'];
$sqlfilePath = $_POST['path'];
$subject = $_POST['subject'];
$time_id = date('mdHis');

$sql = "INSERT INTO work(work_id, work_name, member_id, work_introduce,img_path, like_num, exhibition, verify, visitors) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$statement = $pdo->prepare($sql);
$statement -> bindValue(1, $time_id);    
$statement -> bindValue(2, $fileName);    
$statement -> bindValue(3, 0);    
$statement -> bindValue(4, $fileName);    
$statement -> bindValue(5, $sqlfilePath);
$statement -> bindValue(6, 0);    
$statement -> bindValue(7, 2);    
$statement -> bindValue(8, 1);    
$statement -> bindValue(9, 0);
$statement->execute();

if($subject != ''){
    $sql = "INSERT INTO collection(collection_id, work_id, collection_subject) VALUES (?, ?, ?)";
    $statement = $pdo->prepare($sql);
    $statement -> bindValue(1, $time_id);    
    $statement -> bindValue(2, $time_id);    
    $statement -> bindValue(3, $subject);   
    $statement->execute();
};

    echo '<tr class="table-light"><td><input type="checkbox" class="work_checkbox"></td>';
    echo '<td><p class="work_id">'.$time_id.'</p></td>';
    echo '<td><img src="'.$sqlfilePath.'" alt=""></td>';
    echo '<td><p class="edit_p none"></p><input type="text" style="width:5vw;" value="'.$fileName.'" class="edit_text"></td>';
    echo '<td><p class="produce none"></p><textarea name="" class="edit_textarea" cols="30" rows="10">'.$fileName.'</textarea></td>';
    echo '<td><p class="exhibition_status">下架中</p></td>';
    echo '<td>0</td>';
    echo '<td>0</td>';
    echo "<td width='40'><a href='###' class='edit none'>編輯</a><a href='###' class='save'>儲存</a></td></tr>";
?>


