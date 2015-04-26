jQuery(document).ready(
    function()
    {
        jQuery("#field2").change(subtract_fields);
        jQuery("#field1").change(subtract_fields);

        jQuery("#textFieldID").keydown(function(e) {
          //  jQuery("#contnr").html("<h2>" + jQuery(this).val() + "</h2>");

            // the above line can be broken into 2 lines as follows:
            var myVal = jQuery(this).val(); // grab the textfield value
            alert(myVal);
           // jQuery("#contnr").html("<h2>" + myVal + "</h2>"); // set the value to the div
        });

        alert("JS");
        function subtract_fields()
        {
            alert("FUNCTION");
            if (jQuery("#field1").value != "" && jQuery("#field2").value != "")
            {
                return jQuery("#field1").value - jQuery("#field2").value;
            }

            return "";
        }
    }
);