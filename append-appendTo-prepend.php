<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script>

$(function() {
        var scntDiv = $('#p_scents');
        var i = 1;
		
        $('#addScnt').on('click', function() {
                $('<p><label for="p_scnts"><input type="text" id="p_scnt_' + i + '" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Value" /></label> <input type="email" id="p_scnt" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Email" /></label> <a href="#" id="remScnt">Remove</a></p>' ).appendTo(scntDiv);
                //$(scntDiv).append('<p><label for="p_scnts"><input type="text" id="p_scnt_' + i + '" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Value" /></label> <input type="email" id="p_scnt" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Email" /></label> <a href="#" id="remScnt">Remove</a></p>' );
				//$(scntDiv).prepend('<p><label for="p_scnts"><input type="text" id="p_scnt_' + i + '" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Value" /></label> <input type="email" id="p_scnt" size="20" name="p_scnt_' + i +'" value="" placeholder="Input Email" /></label> <a href="#" id="remScnt">Remove</a></p>' );
				
				i++; 
        });
        
        $("body").on("click", "#remScnt", function() { 			
				$(this).parents('p').remove();					
        });
});

</script>
</head>

<body>
<h2><a href="#" id="addScnt">Add Another Input Box</a></h2>

<div id="p_scents">
<p>
<label for="p_scnts"><input type="text" id="p_scnt" size="20" name="p_scnt" value="" placeholder="Input Value" /></label>
<label for="p_scnts"><input type="email" id="p_scnt" size="20" name="p_scnt" value="" placeholder="Input Email" /></label>
</p>
</div>
</body>
</html>

