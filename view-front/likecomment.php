<?php
session_start();

if(isset($_SESSION["id_user"])) {
}else{
  session_destroy();
	header('Location: signin.php');
 
}
?>
<?php
	include 'C:\xampp\htdocs\louled\Controller\CommentC.php';
	$CommentC=new CommentC();

if (isset($_GET["id_comment"])){
    if($CommentC->recupererlike($_GET["id_comment"],$_SESSION["id_user"])!="")
    {
        $CommentC->dislikecomment($_GET["id_comment"],$_SESSION["id_user"]);
        $Comment=$CommentC->recuperercomment($_GET["id_comment"]);
       
        $CommentC->cancellike($_GET["id_comment"]);
        header("Location:afficherposte.php");

    }
    else
    {
        $CommentC->likecomment($_GET["id_comment"],$_SESSION["id_user"]);
        $Comment=$CommentC->recuperercomment($_GET["id_comment"]);
       
        $CommentC->addlike($_GET["id_comment"]);
        header("Location:afficherposte.php");

    }


}

?>