<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js">
$(".js-example-tags").select2({
  tags: true
});
</script>



<?php
echo '<select class="js-example-tags form-control">
  <option selected="selected">orange</option>
  <option>white</option>
  <option>purple</option>
</select>';
?>