<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";

    $id_pro=$_REQUEST['id_pro'];

    $dsbl=load_binhluan($id_pro);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

            <div class="row mb">
                    <div class="tieude">
                        Bình luận
                    </div>
                    <div class="content2 binhluan">
                      <table>
                            <?php
                                foreach($dsbl as $bl){
                                    extract($bl);
                                        
                                        echo '<tr><td>"'.$content.'"</td>';
                                        echo '<td>"'.$id_user.'"</td>';
                                        echo '<td>"'.$date.'"</td></tr>';

                                    
                                }
                            ?>
                        </table>
                    </div>
                    <div class="boxfooter binhluanform">
                    <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
                            <input type="hidden" name="id_pro" value="<?=$idpro?>">
                            <input type="text" name="content"> 
                            <input type="submit" name="guibinhluan" value="Gửi bình luận">
                        </form>
                    </div>
                    <?php
                        if(isset($_POST['guibinhluan'])&&($_POST['guibinhluan'])){
                            $content=$_POST['content'];
                            $id_pro=$_POST['id_pro'];
                            $id_user=$_SESSION['user']['id'];
                            $date=date('h:i:sa d/m/Y');
                            insert_binhluan($content,$id_user,$id_pro,$date);
                            header("Location:".$_SERVER['HTTP_REFERER']);
                        }
                    ?>
</body>
</html>