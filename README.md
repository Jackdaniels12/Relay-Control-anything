# Relay-Control-anything
Control a Raspberry PI and a Relay with intranet / Amazon Echo / Google home 

I used this image to start

2015-11-21-raspbian-jessie.img

sudo apt-get update 

sudo apt-get install python-dev

sudo apt-get install python-rpi.gpio

sudo apt-get install apache2 php5 libapache2-mod-php5

sudo service apache2 restart

sudo nano /etc/sudoers<br>
 add to bottom of file:  www-data ALL=(root) NOPASSWD:ALL

crtl X then Y

sudo nano /var/www/html/index.php
copy my file and paste it

crtl X then Y to save

Add these files to /home/pi 

lighton_1.py<br>
Lighton_2.py<br>
lightoff_1.py<br>
lightoff_2.py<br>
fauxmo.py<br>

For Alexa / Google to control the relay below

sudo nano fauxmo.py
name your relay you want to comtrol near the bottom of page
ctrl X and y to save

open a browser and type the ip address of the Pi<br> 
http://000.000.000.000/index.php <br>
make sure the web site comes up

Go grab some food this will be awhile

sudo apt-get upgrade

sudo reboot

To run the PI headless use the below file / commands

sudo nano /lib/systemd/system/myscript.service

crtl x then y to save

ExecStart=/usr/bin/python /home/pi/fauxmo.py > /home/pi/fauxmo.log 2>&1

sudo chmod 644 /lib/systemd/system/myscript.service

sudo systemctl daemon-reload

sudo systemctl enable myscript.service

sudo reboot

sudo systemctl status myscript.service

ask alexa to discover and the relay name will come up

thank you too

makermusings https://github.com/makermusings/fauxmo <br>
skiwithpete https://www.youtube.com/watch?v=3u45htuQeag <br>
Mike and Lauren https://www.youtube.com/watch?v=rikUkvyDRGg&t=84s

