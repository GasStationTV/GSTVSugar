Custom Sugar Repository
-----------------------

###Setup

1. Unpack SugarCRM tar file or installation into sugar-dev/.

    gzip -dc sugar.tar.gz | tar -xvf -
    
2. Clone this repository into GSTVSugar.

    git clone git@github.com:cwascha/GSTVSugar.git
    
3. Remove sugar-dev/custom

    rm -r sugar-dev/custom/
    
4. Shuffle the custom/ directory

    mv GSTVSugar/sugar-dev/ GSTVSugar/sugar-dev.tmp
    mv sugar-dev GSTVSugar/
    mv GSTVSugar/sugar-dev.tmp/custom/ GSTVSugar/sugar-dev
    rmdir GSTVSugar/sugar-dev.tmp/

5. Setup database and import database dump. # TODO: more details
6. Open SugarCRM web page, log in as Admin, go to Admin > Admin > Repair > Quick Repair and Rebuild. This will generate many language .php files and other files.



