INTRODUCTION <br />
This is a timeline which allows students to login and post to a timeline, which can be
deleted, edited, or displayed by administrators. Administrators can login and, in addition
to editing posts, can change the student password. For information on how to change the
student username, admin username, and admin password, see "CHANGING USERNAMES AND PASSWORDS"
below. Each time a student submits a new post, administrators receive an email notification,
and the email address this notification is sent to can be changed by administrators as well.

LANGUAGES USED <br />
-HTML <br />
-PHP <br />
-JavaScript

FIREBASE INFORMATION <br />
When students submit a timeline post, the data is sent to an online Firebase database. 
The link to the firebase is https://scorching-inferno-2234.firebaseio.com/ and the project
can be shared with other accounts. 
The credentials for the Google account used for logging in to this firebase account --
Username: itrekfirebase@gmail.com
Password: code4good

LINKS TO BE CHANGED <br />
Before incorporating this project into the iTrek website, there are some internal links that
need to be changed. These are links between pages of the projects which are temporarily set
to be locally hosted, but which should be replaced by the permanent address of each page.<br />
-In code4good-itrek/redirecting_admin.php, on line 7, should link to permanent address of 
code4good-itrek/php-login-script/login.php <br />
-In code4good-itrek/redirecting.php, on line 7, should link to permanent address of 
code4good-itrek/php-login-script/login.php <br />
-In code4good-itrek/php-login-script/admin_edit_post.php, on line 30, action= should link to
 the permanent address of code4good-itrek/redirecting_admin.php <br />
-In code4good-itrek/php-login-script/admin_ui.php, on line 41, action= should link to
 the permanent address of code4good-itrek/admin_write_post.php <br />
-In code4good-itrek/php-login-script/admin_write_post.php, on line 15, action= should link to
 the permanent address of code4good-itrek/redirecting_admin.php <br />
-In code4good-itrek/php-login-script/trekker_ui.php, on line 16, action= should link to
 the permanent address of code4good-itrek/redirecting.php <br />
-In code4good-itrek/redirecting.php, on line 10, the link in the comment line (which provides
 the content of the notification email) should be changed to the permanent address of
 code4good-itrek/php-login-script/login.php <br />

CHANGING USERNAMES AND PASSWORDS <br />
In code4good-itrek/php-login-script/login.php, the student username can be changed on line 8, and 
the admin credentials can be changed on line 7. These username/password combinations should appear
with the following syntax on those lines: array('username' => 'password').

DEVELOPER INFORMATION <br />
Charlie Andrews (cajubelt@mit.edu) <br />
Samantha Fierro (sfierro@mit.edu) <br />
Michelle Lauer (mflauer@mit.edu)