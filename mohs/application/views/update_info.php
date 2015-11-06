<html>
<body>
<form action="do_update" method="post">
 <input type="hidden" name="id" value="<?php echo $id; ?>"/>
Name: <input type="text" name="name" value="<?php echo $name; ?>"/>
Email: <input type="email" name="email" value="<?php echo $email; ?>"/>
<input type="submit" value="SUBMIT"/>
</form>
</body>
</html>