# Relay-Control-anything
Control a Rasperry PI and a Relay with intranet / Amazon Echo / Google home 

use this image to start it is the best one to work with

2015-11-21-raspbian-jessie.img

sudo apt-get update 

sudo apt-get install python-dev

sudo apt-get install python-rpi.gpio

sudo apt-get install apache2 php5 libapache2-mod-php5

sudo service apache2 restart

sudo nano /etc/sudoers<br>
 add to bottom of file:  www-data ALL=(root) NOPASSWD:ALL

alt X then Y

sudo nano /var/www/html/index.php

alt X then Y to save

Add these files to /home/pi 

lighton_1.py<br>
Lighton_2.py<br>
lightoff_1.py<br>
lightoff_2.py<br>
fauxmo.py<br>

Alexa / Google file

sudo nano fauxmo.py
name your relay you want to comtrol near the bottom of page
alt X and y to save

open a browser and type the ip address of the Pi 
http://000.000.000.000/index.php
make sure the web site comes up

sudo apt-get upgrade

sudo reboot

sudo nano /lib/systemd/system/myscript.service

alt x then y to save

ExecStart=/usr/bin/python /home/pi/fauxmo.py > /home/pi/fauxmo.log 2>&1

sudo chmod 644 /lib/systemd/system/myscript.service

sudo systemctl daemon-reload

sudo systemctl enable myscript.service

sudo reboot

sudo systemctl status myscript.service

ask alexa to discover and the relat name will come up

