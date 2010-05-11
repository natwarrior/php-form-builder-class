<?php
error_reporting(E_ALL);
session_start();
include("../class.form.php");

if(isset($_POST["cmd"]) && $_POST["cmd"] == "submit")
{
	echo "<pre>" . htmlentities(print_r($_POST,true)) . "</pre>";
	exit();
}
elseif(!isset($_GET["cmd"]) && !isset($_POST["cmd"]))
{
	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
		<head>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
			<title>PHP Form Builder Class | Examples | jQuery</title>
			<link href="../style.css" rel="stylesheet" type="text/css"/>
		</head>
		<body>
			<div id="pfbc_links"><a href="http://code.google.com/p/php-form-builder-class/">Homepage - Google Code Project Hosting</a> | <a href="http://groups.google.com/group/php-form-builder-class/">Development Community - Google Groups</a> | <a href="http://php-form-builder-class.googlecode.com/files/formbuilder.zip">Download Version <?php echo(file_get_contents('../version'));?></a></div>
			<div id="pfbc_banner">
				<h2>PHP Form Builder Class / Examples / jQuery</h2>
				<h5><span>Version: <?php echo(file_get_contents('../version'));?></span><span style="padding-left: 10px;">Released: <?php echo(file_get_contents('../release'));?></span></h5>
			</div>

			<div id="pfbc_content">
				<p><b>jQuery</b> - Below you will find samples of the form elements that utilize jQuery.  jQuery also handles tooltips and ajax form submissions.</p>

				<?php
				$form = new form("jquery");
				$form->setAttributes(array(
					"includesPath" => "../includes",
					"width" => 300
				));
				$form->addHidden("cmd", "submit");
				$form->addCheckSort("Select And Rank Your Favorite Sports:", "field0", "", array("Baseball", "Basketball", "Golf", "Soccer"), array("clear" => 1));
				$form->addSort("Sort These MLB Baseball Teams Alphabetically:", "field1", array("Dodgers", "Cubs", "Cardinals"));
				$form->addDate("Your Birthday:", "field2");
				$form->addDate("Today's Date Pre-filled:", "field3", date("F j, Y"));
				$form->addDateTime("Select Date/Time:", "field4");
				$form->addDateRange("Select a Date Range:", "field5");
				$form->addDateRange("Select a Date Range:<br/>(prefilled)", "field6", date("F j, Y", strtotime("-1 month")) . " - " . date("F j, Y"));
				$form->addSlider("Select Rating:<br/>(1 = lowest; 5 = highest)", "field7", 3, array("sliderMin" => 1, "sliderMax" => 5));
				$form->addSlider("Select Percentage:", "field8", "", array("sliderSuffix" => "%"));
				$form->addSlider("Select Dollar Amount Range:<br/>($5 increments)", "field9", array(25, 75), array("sliderPrefix" => "$", "sliderSnapIncrement" => 5));
				$form->addSlider("Select Rating Vertical:<br/>(1 = lowest; 5 = highest)", "field10", 3, array("sliderMin" => 1, "sliderMax" => 5, "sliderOrientation" => "vertical", "sliderHeight" => 200));
				$form->addSlider("Select Rating w/Custom Scale:", "field11", 3, array("sliderMin" => 1, "sliderMax" => 5, "sliderHideDisplay" => 1, "postHTML" => '<table cellpadding="0" cellspacing="0" width="100%" border="0"><tr><td align="left" style="width: 73px;">1</td><td align="left" style="width: 74px;">2</td><td align="left" style="width: 74px;">3</td><td align="left">4</td><td align="right">5</td></tr></table>'));
				$form->addRating("Default Rating:", "field12", "", array("1" => "Bad", "2" => "Below Average", "3" => "Average", "4" => "Above Average", "5" => "Good"));
				$form->addRating("Customized Rating:", "field13", "1", range(1, 10), array("ratingHideCaption" => 1, "ratingHideCancel" => 1));
				$form->addColorPicker("Select Color:", "field14");
				$form->addColorPicker("Select Color Pre-filled:", "field15", "009900");
				$form->addButton();
				$form->render();

echo '<pre>' . htmlentities('<?php
$form = new form("jquery");
$form->setAttributes(array(
	"includesPath" => "../includes",
	"width" => 300
));
$form->addHidden("cmd", "submit");
$form->addCheckSort("Select And Rank Your Favorite Sports:", "field0", "", array("Baseball", "Basketball", "Golf", "Soccer"), array("clear" => 1));
$form->addSort("Sort These MLB Baseball Teams Alphabetically:", "field1", array("Dodgers", "Cubs", "Cardinals"));
$form->addDate("Your Birthday:", "field2");
$form->addDate("Today\'s Date Pre-filled:", "field3", date("F j, Y"));
$form->addDateRange("Select a Date Range:", "field4");
$form->addDateRange("Select a Date Range:<br/>(prefilled)", "field5", date("F j, Y", strtotime("-1 month")) . " - " . date("F j, Y"));
$form->addSlider("Select Rating:<br/>(1 = lowest; 5 = highest)", "field6", 3, array("sliderMin" => 1, "sliderMax" => 5));
$form->addSlider("Select Percentage:", "field7", "", array("sliderSuffix" => "%"));
$form->addSlider("Select Dollar Amount Range:<br/>($5 increments)", "field8", array(25, 75), array("sliderPrefix" => "$", "sliderSnapIncrement" => 5));
$form->addSlider("Select Rating Vertical:<br/>(1 = lowest; 5 = highest)", "field9", 3, array("sliderMin" => 1, "sliderMax" => 5, "sliderOrientation" => "vertical", "sliderHeight" => 200));
$form->addSlider("Select Rating w/Custom Scale:", "field10", 3, array("sliderMin" => 1, "sliderMax" => 5, "sliderHideDisplay" => 1, "postHTML" => \'<table cellpadding="0" cellspacing="0" width="100%" border="0"><tr><td align="left" style="width: 73px;">1</td><td align="left" style="width: 74px;">2</td><td align="left" style="width: 74px;">3</td><td align="left">4</td><td align="right">5</td></tr></table>\'));
$form->addRating("Default Rating:", "field11", "", array("1" => "Bad", "2" => "Below Average", "3" => "Average", "4" => "Above Average", "5" => "Good"));
$form->addRating("Customized Rating:", "field12", "1", range(1, 10), array("ratingHideCaption" => 1, "ratingHideCancel" => 1));
$form->addColorPicker("Select Color:", "field13");
$form->addColorPicker("Select Color Pre-filled:", "field14", "009900");
$form->addButton();
$form->render();
?>') . '</pre>';

				?>
			</div>
		</body>
	</html>	
	<?php
}
?>

