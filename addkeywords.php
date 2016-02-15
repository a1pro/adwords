<?php 
include('header.php');
$c_id = $_GET['c_id']; 
$new = explode('#',$c_id);
echo $textadname = $new[1];
echo $textadId = $new[0];

die();
if(@$_POST['submit']){

  $headline = $_POST['headline']; 
  $desc1 = $_POST['desc1']; 
  $desc2 = $_POST['desc2']; 
  $displayurl = $_POST['displayurl']; 
  $finalurl = $_POST['finalurl']; 

try {
    // relative to the AdWordsUser.php file's directory.
  $user = new AdWordsUser();
  // Log every SOAP XML request and response.
  $user->LogAll();
  // Run the example.
  AddTextAds($user,$adGroupId,$headline,$desc1,$desc2,$displayurl,$finalurl);
} catch (Exception $e) {
  
  printf("An error has occurred: %s\n", $e->getMessage());

}  } ?>

<form action="" method="post" >
<label>Ad Group Name</label> 
<input type="text" name="name" disabled value="<?php echo $grpname; ?> "><br>
<label>Add keywords for your Ad</label> 
<textarea id="intext" name="intext"></textarea>
<input type="submit" name="submit" value="submit"><br>
</form>
<?php include('footer.php'); ?>