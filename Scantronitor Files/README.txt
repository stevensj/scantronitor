 __                 _                   _ _             
/ _\ ___ __ _ _ __ | |_ _ __ ___  _ __ (_) |_ ___  _ __ 
\ \ / __/ _` | '_ \| __| '__/ _ \| '_ \| | __/ _ \| '__|
_\ \ (_| (_| | | | | |_| | | (_) | | | | | || (_) | |   
\__/\___\__,_|_| |_|\__|_|  \___/|_| |_|_|\__\___/|_|   
                                                        
The MIT License

Copyright 2011 USAA

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.


The authors intend to make the code of the application free for 
general use.  If you distribute this code, please give include credit 
for the	original authors since they put a lot of time into this:

  Don Franke
  Josh Stevens
  Pete Babcock

========================================================================

REQUIREMENTS
1. Username and password for Qualys API
2. Web server with PHP 5.8.5 or greater installed and running
3. Network connectivity between web server and Qualys API

INSTALLATION
1. Copy contents of scantronitor directory to your web root
2. Modify file /creds.php to include your credentials for logging 
on to the Qualys API
3. Done!  You should be able to go you http://[your web server]/scantronitor 
and view the main page

========================================================================

SETTING UP THE SERVER

Install Apache2 with PHP support on Ubuntu:
---------------------------------------------
sudo apt-get install apache2
sudo apt-get install php5
sudo apt-get install libapache2-mod-php5
sudo /etc/init.d/apache2 restart

Source:  http://www.howtogeek.com/howto/ubuntu/installing-php5-and-apache-on-ubuntu/


Install curl for PHP:
---------------------------------------------
Ubuntu:  sudo apt-get install php5-curl
SUSE:  zypper in php-curl

========================================================================

TROUBLESHOOTING
If you don't see data in the pages, make sure you don't have an IP restriction set up for your Qualys account, which would limit you to accessing the Qualys API only from IP addresses set up for your account.  If this restriction is in place, then you need to make sure to run Scantronitor from a network that access to the Qualys API.

