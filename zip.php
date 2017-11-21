<?php 

echo `find /var/www/html/demo/marketplace9196 -path '*/.*' -prune -o -type f -print | zip /var/www/html/demo/marketplace9196/file.zip -@`;