<?php
include '../connect.php';
$short_about = $_POST['short_about'];
$full_about = $_POST['full_about'];
$speisekarte = $_POST['speisekarte'];
$market = $_POST['market'];
$fetchImage = $_POST['gallery'];
$scrolling_text = $_POST['scrolling_text'];
$query = ORM::for_table('site_about')->find_one(1);
$query->short_about = $short_about;
$query->full_about = $full_about;
$query->speisekarte = $speisekarte;
$query->market = $market;
$query->scrolling_text = $scrolling_text;
//$query->fetchImage = $fetchImage;
//$query->imageTitle = $imageTitle;


$query->save();
if ($query) {
  header("location:site_about.php?success=true");
} else {
  header("location:site_about.php?failed=true");
}