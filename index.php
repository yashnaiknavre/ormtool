<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v16.0&appId=1246509166245623&autoLogAppEvents=1"
        nonce="dbg1JiRS"></script>
        <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v16.0&appId=1246509166245623&autoLogAppEvents=1"
            nonce="rZWzswuv"></script>
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>OnLineRepo</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                            class="fas fa-power-off me-2"></i>Home </a>
                        
                        <a href="about.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                            class="fas fa-power-off me-2"></i>About Us </a>
                        
                        <a href="contact_us.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                            class="fas fa-power-off me-2"></i>Contact</a>
                        
                        <a href="twitter.html" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                            class="fas fa-power-off me-2"></i>twitter</a>
                            <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                                class="fas fa-power-off me-2"></i>Social Media Platform </a>
                        
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Yash Naik
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                <li><a class="dropdown-item" href="One.html">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
             <div class="Socialapi" id="t">
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

            

                <!-- <div id="fb-root"></div>
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="300"
                    data-numposts="1"></div>
                
                    <div class="fb-like" data-href="https://www.facebook.com/profile.php?id=100090684094984" data-width="100" data-layout=""
                        data-action="" data-size="" data-share="true"></div>
                   
                        <iframe
                        src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3Dpfbid02e5ZXMnbdUPtvdzKqH8smgcG8uRN5BjyVvqzhfdq2RatEhEWVDLJ7MwEqRsnHK44dl%26id%3D100090684094984&show_text=true&width=500"
                        width="500" height="157" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>  --> 

            </div>
            </div>
    </div>


</body>

</html>