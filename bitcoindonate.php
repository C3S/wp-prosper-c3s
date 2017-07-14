<?php /* Template Name: BitcoinDonate */ ?>

<?php

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

?>

<?php get_header(); ?>

	<?php
	global $wp_query;
	$postid = $wp_query->post->ID;
	if ( get_post_meta( $postid, 'post_featpages', true ) == "Yes" ) { ?>
		<?php include (TEMPLATEPATH . '/featured-pages.php'); ?>
	<?php } ?>

	<?php if ( get_post_meta( $postid, 'post_featcontent', true ) == "Full Width Featured Content Slider"  ) { ?>
		<?php include (TEMPLATEPATH . '/featured-wide.php'); ?>
	<?php } ?>

	<div id="page" class="clearfix">

		<div id="contentleft">

			<?php if ( get_post_meta( $postid, 'post_featcontent', true ) == "Narrow Width Featured Content Slider" ) { ?>
				<?php include (TEMPLATEPATH . '/featured-narrow.php'); ?>
			<?php } ?>

			<?php if ( get_post_meta( $postid, 'post_featvideo', true ) == "Yes" ) { ?>
				<?php include (TEMPLATEPATH . '/featured-vids.php'); ?>
			<?php } ?>

			<?php if ( get_post_meta( $postid, 'post_featgalleries', true ) == "Yes" ) { ?>
				<?php include (TEMPLATEPATH . '/featured-galleries.php'); ?>
			<?php } ?>

			<div id="content" class="maincontent">
			
			<big>

			<?php

				$amount_string = "0.00500000";
				if (!is_null($_POST["amount"]) && $_POST["amount"] != "")
				{
					$amount_string = $_POST["amount"];
				}

				// generated bitcoin addresses (replace those used!)
				$btc_adresses = array(
					0 => "1AvPGVnStJCuvCfXBWC7jkxGXnZQCNLHNj",
					1 => "122yT1cJ9LNRQMgWkmT6bY7WZ2VirzNzN4",
					2 => "1FRxCVWFgWRQuDfHmP96zpQaDJCSP6s1kz",
					3 => "14hGS9bkpgbkdhwRryfe3ZfuZ8X6Nw9CVG",
					4 => "1H4ERiTaLCd5riWEizCXfbVHBH8sn8nVnA",
					5 => "1PWj1iPdSucRnuUxCQiLJoEgd4KASAzVQ4",
					6 => "13T2GpggjBe4HpGCcfoazr5xifhwdf8jJg",
					7 => "1AyiktnpLbgEcXmkwjptMcYuWF3spjjxck",
					8 => "1LAV9Rcoi8EoRoyhcogPPG1HdhQsYShcXc",
					9 => "12h4ymctQfmA1Wa2wLQoVdVZA98xoUw8WJ",
				);				

				// get hash from ip address of the donater to select one of the btc addresses
				$user_ip = getUserIP();
				$tok = strtok($user_ip, ".");
				$n = 0;
				while ($tok !== false) {
					$n += intval($tok);
					$tok = strtok(".");
				}

				$btc_adr_to_use = $btc_adresses[$n % 10];
				$link_string = "<a href='bitcoin:".$btc_adr_to_use."?amount=".$amount_string.
					"&label=Spende%20an%20die%20C3S%20-%20ID39458".strval($n % 10).
					"&message=Danke%20fuer%20Deine%20Unterstuetzung!'>";
				echo "Danke für Deine Bitcoin-Spende!<br><br>Bitte klicke jetzt ".
					$link_string."hier</a>, wenn Dein ".
					"Bitcoin-Client Links unterst&uuml;tzt, oder kopiere folgende Adresse manuell ".
					"in Deinen Client:<br><br><center><i><b>".$link_string.$btc_adr_to_use."</a></b></i></center>";
			?>
							
			</div>

			</big>

			<?php include (TEMPLATEPATH . '/sidebar-narrow.php'); ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>