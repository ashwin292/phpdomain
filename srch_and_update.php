<!DOCTYPE html>
<html>
<body>
<h3>Search For Existing User</h3>
<form action="database.php" method="post">
Search <input type="text" name="search"><br><br>

Column: <select name="column">
	<option value="first_name">First Name</option>
	<option value="email">Email</option>
	<option value="cell_phone">Phone Number</option>
	</select><br><br>
<input type ="submit">
</form>
<br><br>
<h3>Add a New User</h3>
<form method = "post" action = "database.php">
                  <table width = "400" border =" 0" cellspacing = "1" 
                     cellpadding = "2">
                  
                     <tr>
                        <td width = "100">User ID</td>
                        <td><input name = "user_id" type = "Number" 
                           id = "user_id"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100">First Name</td>
                        <td><input name = "first_name" type = "text" 
                           id = "first_name"></td>
                     </tr>

                     <tr>
                        <td width = "100">Last Name</td>
                        <td><input name = "last_name" type = "text" 
                           id = "last_name"></td>
                     </tr>

                     <tr>
                        <td width = "100">Email</td>
                        <td><input name = "email" type = "text" 
                           id = "email"></td>
                     </tr>

                      <tr>
                        <td width = "100">Home Address</td>
                        <td><input name = "home_address" type = "text" 
                           id = "home_address"></td>
                     </tr>

                      <tr>
                        <td width = "100">Home Phone</td>
                        <td><input name = "home_phone" type = "text" 
                           id = "emp_id"></td>
                     </tr>

                       <tr>
                        <td width = "100">Cell Phone</td>
                        <td><input name = "cell_phone" type = "text" 
                           id = "cell_phone"></td>
                     </tr>

                       <tr>
                        <td width = "100">Country</td>
                        <td><input name = "country" type = "text" 
                           id = "country"></td>
                     </tr>

                       <tr>
                        <td width = "100">State</td>
                        <td><input name = "state" type = "text" 
                           id = "state"></td>
                     </tr>

                       <tr>
                        <td width = "100">Zip</td>
                        <td><input name = "zip" type = "Number" 
                           id = "zip"></td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "update" type = "submit" 
                              id = "update" value = "Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>

</body>
</html>