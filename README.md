Custom Sugar Repository
-----------------------

###Setup

1. Unpack SugarCRM tar file or installation into sugar-dev/.


    `gzip -dc sugar.tar.gz | tar -xvf -`


2. Clone this repository into GSTVSugar.

    `git clone git@github.com:cwascha/GSTVSugar.git`
    
3. Remove sugar-dev/custom

    `rm -r sugar-dev/custom/`
    
4. Move the Git files into sugar-dev. Now sugar-dev is your Git repository!

```
    mv GSTVSugar/.git GSTVSugar/.gitignore GSTVSugar/custom GSTVSugar/README.md sugar-dev/
    rmdir GSTVSugar
```

5. Setup database and import database dump.

	`gzip -dc gstvdev.sql.gz | mysql -u sugardevuser -p sugardevcrm`

6. Open SugarCRM web page, log in as Admin, go to Admin > Admin > Repair > Quick Repair and Rebuild. This will generate many language .php files and other files in cache/ and elsewhere.

