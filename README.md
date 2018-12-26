# Relay-Control-anything
Control a Raspberry PI and a Relay with intranet / Amazon Echo 

I used this image to start

2015-11-21-raspbian-jessie.img

SSH in to your PI

sudo rasp-cfg expand file system

sudo apt-get update 

sudo apt-get install python-dev

sudo apt-get install python-rpi.gpio

sudo apt-get install apache2 php5 libapache2-mod-php5

sudo service apache2 restart

sudo nano /etc/sudoers<br>
 add to bottom of file:  www-data ALL=(root) NOPASSWD:ALL

crtl X then Y

sudo nano /var/www/html/index.php <br>
copy my file "index.php" and paste it to your file<br>
edit the name of the lights

crtl X then Y to save

Add these files to /home/pi 
I use Winscp for this

lighton_1.py<br>
Lighton_2.py<br>
lightoff_1.py<br>
lightoff_2.py<br>
fauxmo.py<br>

For Alexa / Google to control the relay below

sudo nano fauxmo.py <br>
name your relay you want to control near the bottom of page <br>
FAUXMOS = [ <br>
    # use GPIO pin 15 17 or 4 to trigger a relay <br>
	['Counter Light', gpio_handler(15)], <br>
	['Floor Light', gpio_handler(17)], <br>
	#['The Camera', gpio_handler(4)], <br>
] <br>
ctrl X and y to save

open a browser and type the ip address of the Pi<br> 
http://000.000.000.000/index.php <br>
make sure the web site comes up

Go grab some food this will be awhile

sudo apt-get upgrade

sudo reboot

To run the PI headless use the below file / commands

sudo nano /lib/systemd/system/myscript.service <br>
copy my file "myscript.service" and paste it

crtl x then y to save

ExecStart=/usr/bin/python /home/pi/fauxmo.py > /home/pi/fauxmo.log 2>&1

sudo chmod 644 /lib/systemd/system/myscript.service

sudo systemctl daemon-reload

sudo systemctl enable myscript.service

sudo reboot

sudo systemctl status myscript.service

ask alexa to discover and the relay name will come up

thank you to

makermusings https://github.com/makermusings/fauxmo <br>
skiwithpete https://www.youtube.com/watch?v=3u45htuQeag <br>
Mike and Lauren https://www.youtube.com/watch?v=rikUkvyDRGg&t=84s

