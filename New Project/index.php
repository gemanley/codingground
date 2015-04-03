<!DOCTYPE html>
<H1>CPRE 288 Final Project ROBOT </H1>
<?php echo("Test");
if(isset($_POST['forward'])){
$forward=file_get_contents("forward.txt")+1;
file_put_contents("forward.txt", $forward);
echo("it worked/n");}

if(isset($_POST['back'])){
$back=file_get_contents("back.txt")+1;
file_put_contents("back.txt", $back);
echo("it worked/n");}

if(isset($_POST['left'])){
$left=file_get_contents("left.txt")+1;
file_put_contents("left.txt", $left);
echo("it worked/n");}

if(isset($_POST['right'])){
$right=file_get_contents("right.txt")+1;
file_put_contents("right.txt", $right);
echo("it worked/n");}

if(isset($_POST['reset'])){
file_put_contents("right.txt", 0);
file_put_contents("left.txt", 0);
file_put_contents("forward.txt", 0);
file_put_contents("back.txt", 0);
}

$forward=file_get_contents("forward.txt");
$back=file_get_contents("back.txt");
$left=file_get_contents("left.txt");
$right=file_get_contents("right.txt");

?>
   <P>Press the button in the direction you want the robot to go .</P> 
</BODY>

<style type="text/css">

div
{
   width:310px;
   height:220px;
   background-color:;
   border:1px solid black;
}

#div2
{
   transform:rotate(30deg);
   -ms-transform:rotate(30deg); /* IE 9 */
   -moz-transform:rotate(30deg); /* Firefox */
   -webkit-transform:rotate(30deg); /* Safari and Chrome */
   -o-transform:rotate(30deg); /* Opera */
   background-color:yellow;
}
#rotate90 {
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    transform: rotate(90deg);
}
#rotate180 {
    -webkit-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}
#rotate270 {
    -webkit-transform: rotate(270deg);
    -moz-transform: rotate(270deg);
    -o-transform: rotate(270deg);
    -ms-transform: rotate(270deg);
    transform: rotate(270deg);
}
.imgclass{
background-image: url(button.png);
height:100px;
width:100px;
}
.imgclass2{
background-image: url(nothing.png);
height:100px;
width:100px;
}
</style>

<html>


    <title>Space Clicker</title>



 
<div id="div">   
<form method="POST">
    <input type="button"  class="imgclass2"   id="rotate270">
    <input type="submit"  class="imgclass" value="forward" name="forward" id="rotate270">
<input type="button"  class="imgclass2"   id="rotate270">
<p></p>
    

<input type="submit"  class="imgclass" value="left" name="left" id="rotate180">
<input type="submit"  class="imgclass" value="back" name="back" id="rotate90">
<input type="submit"  class="imgclass" value="right" name="right" >


</form>
    

</div>   
    <p>Move Backwards: <a id="clicksDown"><?php echo($back); ?></a></p>
    <p><hidden>Left: <a id="clicksL"><?php echo($left); ?></a></hidden></p>
    <p><hidden>Right: <a id="clicksR"><?php echo($right); ?></a></hidden></p>
    <p> <hidden>Move Forward: <a id="clicksUp"><?php echo($forward); ?></a></hidden></p>
<form method="POST">

<input  type="submit" value="reset" name="reset">
</form>
</body></html>
      



</body>
</html>
