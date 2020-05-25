1. Put Laravel_project_manager folder to Ampps or Xamp;
2. import sql files that are in LaravelProjectManagerSql folder;
3. Create .htaccess file with code one lvl up from Laravel_project_manager folder:
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteRule ^(.*)$ LaravelProjectManager/public/$1 [L]
</IfModule>
4. 