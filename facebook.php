<?php
$con=mysqli_connect('localhost','root','','facebook');
            
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v16.0/105133852514344?fields=feed.limit(10)%7Bcomments.limit(10)%7Bmessage%2Cmessage_tags%2Ccan_reply_privately%2Ccreated_time%7D%7D&access_token=EAAV7wI7GBjkBAIDjZCTF6QZCG8v08cZBskskFW3sU0SVZCDD7U4ZBLfpfixNLK0BvUSKQ37Ccrixcfo8CXOvAsoMkRqaPlPKQg5odvuHBlZCxZBqLZCTwBlp1A799ye7Bx97A3jESFI07pOxSGNdklZBpBICfmIMkyTRoFyfgF8rjAZCvy3AhlIhyW');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
 $result=json_decode($result);
 
 foreach($result->feed->data as $list){
     
}
foreach($list->comments->data as $list1){
    // echo'<pre>';
    // print_r($list1);

print_r($list1->message);
echo "<br>";
print_r($list1->created_time);
echo "<br>";
// print_r($list1->can_reply_privately);
echo "<br>";
}                
 ?>

<!-- // $id='';
// $message='';
// $created_time=''
// $id=$list1->id;
// $created_time=$list1->created_time;

    // if(isset($list1->message)){
    // $message=$list1->message;
// }




// foreach($result->feed->data as $list){
// foreach($result->comments->data as $list){
// echo '<pre>';
// $message='';
// $id='';
// if(isset($list->message)){
    // $message=$list->message;
// }
// if(isset($list->id)){
//     $id=$list->id;

// }
// print_r($list);
// mysqli_query($con,"insert into facebook_posts(id,created_time,message) values('$id','$created_time','$message')");
// }   
// } -->
