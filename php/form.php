<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>
    <meta charset="UTF-8" />
    <meta name="author" content="Josh Hallinan" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../general_style.css">
    <link rel="stylesheet" type="text/css" href="php_style.css">
</head>

<body>
    <?php	
		$title = "Form";
        include '../templateHeader.php';        
	?>
	<form id="instrument" action="form_submit.php" method="post" onreset="resetInstrument()">
        <fieldset id="contact_info">
            <legend> Contact Information </legend>
            First Name: <input type="text" name="first" pattern="^[a-zA-Z, ]*$" title="only letters, spaces and apostorphes allowed" required><span class="error">*</span><br>
            Last Name: <input type="text" name="last" pattern="^[a-zA-Z, ]*$" title="only letters, spaces and apostorphes allowed" required><span class="error">*</span><br>
            Email: <input type="email" name="email" required><span class="error">*</span> 
        </fieldset>
            
        <fieldset id='instrument_select'>
            <legend> Order Details </legend>
            Instrument:
            <span class="error">*</span>
            <select id= "instrumentlist" name="instrumentlist" form = "instrument" required>
                <option value="">Select One...</option>
                <option value="/images/clarinet.jpg">Clarinet $25/month</option>
                <option value="/images/flute.jpg">Flute $25/month</option>
                <option value="/images/saxophone.jpg">Saxophone $45/month</option>
                <option value="/images/trumpet.jpg">Trumpet $25/month</option>
                <option value="/images/french_horn.jpg">French Horn $50/month</option>
                <option value="/images/trombone.jpg">Trombone $30/month</option>
                <option value="/images/tuba.jpg">Tuba $60/month</option>
            </select>
            
            <img id="image" src="/images/FFFFFF-0.png" width = "225" height = "225" alt="Instrument Image">
            <br>
            Quantity:
            <input type="number" name="quantity" min="1" required><span class="error">*</span>
        </fieldset>

        <fieldset id="donation_info">
            <legend> Donation </legend>
            <p> Do you wish to round up to the nearest dollar and donate? <span class="error">*</span></p>
            <input type="radio" name="donation" value="donate" required>Yes Donate!<br>
            <input type="radio" name="donation" value="none" required> No thanks
        </fieldset>
        <input type="hidden" name="date" value="">
        <span id='required_value_text' class="error">* Indicates that these values are required</span> 
        <input class='form_button' type="reset">
        <input class='form_button' type="submit" value="Purchase">
    </form>         
<?php include '../templateFooter.php';?>
<script>
    function setInstrument() {
        var image = document.getElementById("image");
        image.src = this.value;
        return false;
    }
    function resetInstrument() {
        document.getElementById("image").src = "/images/FFFFFF-0.png";
        
        return false; 
    }
    document.getElementById("instrumentlist").onchange = setInstrument;   
</script>
</body>
</html>