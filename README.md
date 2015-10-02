1. Make sure you have on windows installed the apache server, mysql database with phpmyadmin web interface.Install xampp to get all together.
2. Download Project from https://codeload.github.com/DrailDragon/GTrade/zip/master
2. Extract GTrade-Master.zip into path/to/htdocs folder.
3. Start the php server and mysql server from xampp control panel.
 /*******Install Database**************/
4. Import sql file path/to/GTrade-Master/online_trading_latest_version.sql into your dbms.
      For this create a new database named online_trading and import inside it.You can import it in other database but for that you have to change the value of the constant DBNAME inside path/to/GTrade-Master/config/config.php as yourdbname. Also other constants defined there you need to set accordingly.By default the constants are set as following:
             "HOSTNAME" "http://localhost/online_trading"
              "DB_HOST" "localhost"
              "USERNAME" "root"
              "PASS"  "root"
              "DBNAME"  "online_trading"
4. Open your favourate web browser and type the address http://localhost:8080/GTrade-Master/files/index.php.(port(8080) and/or server name(localhost) may vary based on your server config)
5. From top right menu click on Bulk Order.
6. Bulk Order: EEE and ECE students of MTech,BTech and Phd need to buy electronic items like ram,cpu,registers and other stufffs for thei BTP MTP or research purposes. The shopkeepers in Guwahati city donot provide home delivery for these items if items have low weight in terms or amount or cost. To overcome their issue we provide a place where 
      Shopkeeper sets the thresold for each item's order both in amount and cost.Buyers will order their required items in their own amount. Shopkeeper is informed about the order which has reached its thresold either in amount or cost. Then shopkeeper ships the items to the address specified.
Buyer can do the following stuffs: search for an item, order , see the order hostory, can see suggestions based on search history of all the users, See the offers.
Seller : Update the database of items : add new item , remove an item , update availability, cost, offer, thresold.
7. Languages and libraries we have used are php, javascript, ajax, html, css, bootstrap,mysql. 
8. path/to/GTrade-master/doc contains documentation for each section.
