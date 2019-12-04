<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
	<link rel="stylesheet" type="text/css" href=css/style.css>
	<style type="text/css">
	input[type="submit"]{
		cursor: pointer;
	}
	</style>


    </head>


    <body>
    	<center>
    		<h3>Register Here</h3>

    		<form action="" method="">

    			<table>

    				<tr>
    					<td>Last Name:</td>
    					<td>
    						<input type="text" name="user" placeholder=
    						"Enter Last name">
    					</td>
    				</tr>

    				<tr>
    					<td>First Name:</td>
    					<td>
    						<input type="text" name="user" placeholder=
    						"Enter First name">
    					</td>
    				</tr>

    				<tr>
    					<td>Email Address:</td>
    					<td>
    						<input type="text" name="email address"
    						placeholder="Enter Email address">
    					</td>
    				</tr>

    				<tr>
    					<td>Password:</td>
    					<td>
    						<input type="Password" name="User_pass"
    						placeholder="Enter Password ">
    					</td>
    				</tr>

    				<tr>
    					<td>Confirm_Pass:</td>
    					<td>
    						<input type="Password" name="Confirm_pass"
    						placeholder="Enter Confirm Password">
    					</td>
    				</tr>

    				<tr>
    					<td>Gender:</td>
    					<td>
    						<input type="radio" name="Gender">Male
						    <input type="radio" name="Gender">Female
					    </td>
				    </tr>

				    <tr>
					    <td>Phone:</td>
					    <td>
					    	<select>
					    		<option>+254</option>
							    <option>+255</option>
							    <option selected>+63</option>
							    <option>+257</option>
							    <option>+258</option>
						    </select>
						    <input type="phone" name="mob_digits"
						    placeholder="97*******" maxlength="9">
						</td>
						
						<tr>
						     <td> 
						     	 <input type="submit" name="submit"
						         value="submit">
						     </td>

						     <td>
						     	Already a user? <a href="login.php">
							    Login</a>
					         </td>

					         <tr>

					           <td> 
						     	 
						      </td>

					         <td>
					         	<a href="front.php">
					         	Home</a>
					         </td>
					         </tr>
					    </tr>
				    </tr>
			    </table>
		    </form>
	    </center>
    </body>
</html>