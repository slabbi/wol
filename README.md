# "Wake on Lan" (WOL) with VPN and FRITZ!Box

* [Introduction](#Introduction)
* [Installation on a pi-hole server](#Installation_on_a_pi-hole_server)

## Introduction

Are you once again annoyed that the Fritzbox is not forwarding WOL packets via IPsec or WireGuard?
Then this workaround may be exactly what you are looking for.
The small script runs on a local web server and can thus wake up the devices. 

Theoretically, you can also go to the Fritzbox's web interface and wake up the device with "Start computer", but this is more than cumbersome.

The script itself is trivial, this is more about describing a simple way to install it on an existing pi-hole server.

## Installation on a pi-hole server

If you already have a pi-hole running, you can do this quickly with just a few lines:

### Install 'wakeonlan' packet

```
sudo apt-get install wakeonlan
```

### Ensure that fastcgi is running

```
sudo lighty-enable-mod fastcgi
sudo lighty-enable-mod fastcgi-php
sudo service lighttpd force-reload
```

### Create web folder for the WOL script

```
cd /var/www/html/
sudo mkdir wol
sudo chmod 0777 wol
```

### Copy WOL script to web folder

Copy the simple script from this repository to the 'wol' folder.

The script must of course be adapted to your own network and the MAC addresses of the devices to be woken up must be entered.

### Create a shortcut on your iPhone or Android

Open the website 'http://< pihole >/wol/' on your iPhone or Android device and create a bookmark on the home screen.

<img src="https://github.com/slabbi/wol/assets/65805263/e3d2e323-e790-4ea8-8f00-2524a8124e5c" height="200">
<img src="https://github.com/slabbi/wol/assets/65805263/a6f4784c-28f2-46ce-849f-5163922b87de" height="200">

### Optional: Install a ftp server on pi-hole

If you want to upload the script a little more conveniently, you can also install an ftp server at the same time.
This is also useful when you want to access the pi-hole files.

```
sudo apt-get update
sudo apt-get install vsftpd
sudo nano /etc/vsftpd.conf
```

Change following lines in the vsftpd.conf:

```
anonymous_enable=NO
local_enable=YES
write_enable=YES
local_umask=022
```

Den ftp server neu starten
```
sudo service vsftpd restart
```
