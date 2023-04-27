
# 3 Factor Authentication Login System 

### To run the project 

#### Install Xampp, copy the folder in XAMPP/htdocs/
#### Start Apache Server and My Sql Database
#### Open PhpMyAdmin and upload/copy the contents of db.sql file
#### Open localhost/3FactorAuth/index.php

- 1st Factor of authentication is basic password
- 2nd Factor of authentication is a Personal question as of now its first school
- 3rd Factor of authentication is a random pin generated which is sent to the logged in user
If the pin is verified then they are redirected to home page else signup page
- Pin generated is a random number in the range of 1 - 100
- Used emailJs to send emails to clients
- To configure emailJs, took help from https://www.youtube.com/watch?v=dgcYOm8n8ME
