<?php
if(isset($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
} else {
    die("No name provided");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link rel="stylesheet" href="cer.css">
</head>
<body>
    <div class="certificate-container">
	<div class="certificate-header">
        <h1>CERTIFICATE OF COMPLETION</h1>
		</div>
			<div class="certificate-body">

        <p class="certificate-text">This is to certify that</p>
		<br>
        <h2><?php echo $name; ?></h2>
        <p class="certificate-text">has successfully completed the</p>
        <h3 id="course">QUIZ LEVEL</h3>
		<br>
        <p>on <span><?php echo date('d-m-Y'); ?></span></p>
         <div class="certificate-footer">
            <div class="signature">
<p style="color:yellow">𝕾.𝖒𝖊𝖎𝖒𝖆𝖙𝖍𝖆𝖓</p>
                <p>Creater signature</p>
            </div>
            <div class="seal">
<p style="color:yellow">𝓐. 𝓶𝓪𝓱𝓪𝓻𝓪𝓳𝓪</p>
                <p> Senior signature</p>
            </div>
        </div>
        </div>
    
</body>
</html>