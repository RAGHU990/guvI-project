# guvI-project
AWS 
https://guvi-raghu-project.herokuapp.com/login.html



Terms · Privacy · Program Policies
Last account activity: 0 minutes ago
Open in 1 other location · Details
## create Database at AWS
 Using AWS RDS - free tier 
 
db instance name: database-guvi

db_name: guvi_database
username: guvi_user
password: ........

## command to connect to database

mysql -h database-guvi-raghu.ck2rgsp30sfg.ap-south-1.rds.amazonaws.com -u guvi_user -p guvi_database



## Create Table on AWS DB



CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `username` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `phone` varchar(12) NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);
db_raghu.txt
Displaying db_install_cmds.txt.
