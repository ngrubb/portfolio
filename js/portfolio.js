
// Initially hide all of the panels.
$('#bridge-collapsible').collapse('hide');
$('#turtle-collapsible').collapse('hide');
$('#cpaeel-collapsible').collapse('hide');
$('#l33t-collapsible').collapse('hide');

//Close other collapsibles when the trigger is clicked.
$('#cpaeel-trigger').click(function() {
	$('#bridge-collapsible').collapse('hide');
	$('#turtle-collapsible').collapse('hide');
	$('#l33t-collapsible').collapse('hide');
});

$('#bridge-trigger').click(function() {
	$('#cpaeel-collapsible').collapse('hide');
	$('#turtle-collapsible').collapse('hide');
	$('#l33t-collapsible').collapse('hide');
});

$('#turtle-trigger').click(function() {
	$('#bridge-collapsible').collapse('hide');
	$('#cpaeel-collapsible').collapse('hide');
	$('#l33t-collapsible').collapse('hide');
});

$('#l33t-trigger').click(function() {
	$('#bridge-collapsible').collapse('hide');
	$('#turtle-collapsible').collapse('hide');
	$('#cpaeel-collapsible').collapse('hide');
});
