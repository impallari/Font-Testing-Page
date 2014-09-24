<?php 
// Default Values, just in case...
$csspixels = 600;
$fontsize = 72;
$spacewidth = 100;
$fontupm = 1000;
if ( isset( $_POST['csspixels'] ) && !empty( $_POST['csspixels'] ) ) $csspixels = $_POST['csspixels'];
if ( isset( $_POST['fontsize'] ) && !empty( $_POST['fontsize'] ) ) $fontsize = $_POST['fontsize'];
if ( isset( $_POST['spacewidth'] ) && !empty( $_POST['spacewidth'] ) ) $spacewidth = $_POST['spacewidth'];
if ( isset( $_POST['fontupm'] ) && !empty( $_POST['fontupm'] ) ) $fontupm = $_POST['fontupm'];

$one_word = $csspixels / ($fontsize / $fontupm);
$two_words = ($one_word - $spacewidth) / 2;
$three_words = ($one_word - ($spacewidth * 2)) / 3;
$four_words  = ($one_word - ($spacewidth * 3)) / 4;
$five_words  = ($one_word - ($spacewidth * 4)) / 5;

?>
<p>1 Word: <?php echo number_format($one_word, 2, ".", ""); ?> AdvanceWidth.</p>
<p>&nbsp;</p>
<p>2 Word: <?php echo number_format($two_words, 2, ".", ""); ?> AdvanceWidth each.</p>
<p>&nbsp;</p>
<p>3 Word: <?php echo number_format($three_words, 2, ".", ""); ?> AdvanceWidth each.</p>
<p>&nbsp;</p>
<p>4 Word: <?php echo number_format($four_words, 2, ".", ""); ?> AdvanceWidth each.</p>
<p>&nbsp;</p>
<p>5 Word: <?php echo number_format($five_words, 2, ".", ""); ?> AdvanceWidth each.</p>