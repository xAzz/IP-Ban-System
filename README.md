# PHP IP Ban System

### What is this PHP IP Ban System?
This system is a ```IP Ban``` system made in pure php. It blocks a users IP from joining http://example.com/ and redirects the user to http://example.com/banned showing the user is banned. If a user that isn't banned tries accessing the banned page they will be redirected to http://example.com

### How to use it?
Add the php code supplied in index.php in the main directory to the top of your php page you want to ban someones IP on, for example the index page. Make sure you are using the php file format for the page you are adding the code to. There are examples/tips on how to use it in the files provided.

### How to add IP's to the Banlist?
To add a IP to the ban list, open banned/banlist.php and add another IP to the array (example shown in the file)
