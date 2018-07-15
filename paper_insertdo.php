<?php 
//取数据
$data['subject']=$_REQUEST['subject'];
$data['total']=$_REQUEST['total'];
$data['name']=$_REQUEST['name'];
$data['memo']=$_REQUEST['memo'];

require_once 'conn.php';
$query="select id from select_question where subject='".$data['subject']."'";
$result=@mysql_query($query);
while ($row=mysql_fetch_array($result)){
    $questionNo[]=$row;
}
$content="";
$minSum=min($data['total'],count($questionNo));
for($i=0;$i<$minSum-1;$i++){
    $content.=$questionNo[$i]['id'].',';
}
 $content.=$questionNo[$i]['id'];
 $data['content']=$content;
 $writePaper="insert into paper(subject,total,name,content) values('".$data['subject']."','".$data['total']."','".$data['name']."','".$data['content']."')";
 $result=mysql_query($writePaper);
 header("content-type:text/html;charset=utf-8");
 if($result){
     echo "数据保存成功！";
     echo "<a href=paper_index.php>返回</a>";
 }else{
     echo "数据保存失败！";
     echo "<a href=paper_index.php>返回</a>";
 }
?>

