CREATE DATABASE if not exists web_coursework;

use web_coursework;

create table tblPosts (
postID int auto_increment,
userID int not null,
postTitle varchar(250) not null,
postTopic varchar(250) not null,
postDateTime TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP,
postBody varchar(10000) not null,
PRIMARY KEY (postID)
)AUTO_INCREMENT=1;

create table tblComment (
commentID int auto_increment,
postID int not null,
userID int not null,
commentsDateTime TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP,
comment_Body varchar(1000) not null,
PRIMARY KEY (commentID)
)AUTO_INCREMENT=1;

create table tblLike (
likeID int auto_increment,
userID int not null,
postID int not null,
commentID int not null,
likeDateTime TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (likeID),
unique (likeID, postID),
unique (likeID, commentID)
)AUTO_INCREMENT=1;

create table tblNotification (
notificationID int auto_increment,
userID int not null,
postID int not null,
notificationDateTime TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP,
notificationBody varchar(250),
PRIMARY KEY (notificationID)
)AUTO_INCREMENT=1;

create table tblUser (
userID int auto_increment,
userName varchar(100) not null,
userPass varchar(100) not null,
userEmail varchar(100) not null,
userJoinDate TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP,
userType varchar(10) not null DEFAULT 'user',
userFollowers int(10) not null DEFAULT 0,
userImage varchar(250) null,
PRIMARY KEY (userID)
)AUTO_INCREMENT=1;

create table tblEndorse (
endorseID int auto_increment,
userID int not null,
postID int not null,
endorserMessage varchar(1000) not null,
endorseDateTime TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (endorseID)
)AUTO_INCREMENT=1;

create table tblTag (
tagID int auto_increment,
tagName varchar(100) not null,
userID int not null,
postID int not null,
tagURL varchar(250) not null,
targetName varchar(250) not null,
tagDateTime TIMESTAMP not null DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (tagID)
)AUTO_INCREMENT=1;

ALTER TABLE tblComment ADD FOREIGN KEY  (postID) REFERENCES  tblPosts(postID) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblComment ADD FOREIGN KEY  (userID) REFERENCES  tblUser(userID) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE tblPosts ADD FOREIGN KEY  (userID) REFERENCES  tblUser(userID) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE tblLike ADD FOREIGN KEY  (postID) REFERENCES  tblPosts(postID) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblLike ADD FOREIGN KEY  (userID) REFERENCES  tblUser(userID) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblLike ADD FOREIGN KEY  (commentID) REFERENCES  tblComment(commentID) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE tblNotification ADD FOREIGN KEY  (postID) REFERENCES  tblPosts(postID) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblNotification ADD FOREIGN KEY  (userID) REFERENCES  tblUser(userID) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE tblEndorse ADD FOREIGN KEY  (postID) REFERENCES  tblPosts(postID) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblEndorse ADD FOREIGN KEY  (userID) REFERENCES  tblUser(userID) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE tblTag ADD FOREIGN KEY  (postID) REFERENCES  tblPosts(postID) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE tblTag ADD FOREIGN KEY  (userID) REFERENCES  tblUser(userID) ON DELETE CASCADE ON UPDATE CASCADE;
