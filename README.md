<h1 align="center">Real Estate System</h1>

<p align="center"> Related Course: CPSC 471 - Database Management Systems </p>

<p> Mobile friendly web‑based platform for Real Estate Agents to list both commercial and residential estates and allows users to search the database
using parameters such as price range, and number of rooms. Created and designed using Relational Model, EERD, and HIPO Diagram.
 
For more information and details, project intermediate and final reports can be found in PDF format in the <i>Reports</i> folder in the reponsitory.</p>

<br></br>

# Environment Setup
1. Download [AppServ](https://www.appserv.org). Take note of your root password when configuring your MySQL Server.<br/>
2. Download all files in the main branch of this repo.<br/>
3. Navigate to *C:/AppServ/www* on your local PC and copy the entire *real-estate-db* folder into this directory.<br/>
4. Open the *connection.php* file in a text editor and put your password from step 1 as the value for *db_pass*.<br/>
5. Open a web browser and enter into the address bar: *localhost/phpmyadmin*. Log in with username "root" and the password you took note of in step 1.<br/>
6. Once logged in, select "Databases" from the menu at the top and create a new database called "real_estate_db". <br/>
7. From the same menu at the top of the page, select "Import" and import the "real_estate_db.sql" file from the *database* folder of this repository.<br/>
8. Now, open another tab in your browser and enter into the address bar: [localhost/real-estate-db](http://localhost/real-estate-db/).<br/>
<br/>
If setup was successful, you should see a login page.

<br></br>

# Built With
- SQL
- PHP
- HTML
- CSS
- MySQL

<br></br>

# Functionalities Implemented
1. New account creation for seller, buyer, or agent, each equipped with specific functionalities. <br>
2. Log into created accounts. <br>
3. Users able to logout of their account. <br>
4. Buyers may search for properties, booking meetings with an agent, view bookmarked properties, and view scheduled meetings. <br>
5. Sellers may add new property listings, search for properties, and view currently listed properties. <br>
6. Agents may search for properties, view scheduled meetings, view bookmarked properties, update listing statuses, and upload property images. <br>

For more details on these functionalities, please refer to the <i>Final Project Report</i> in the <i>Reports</i> folder within the repository.

<br></br>

# Authors

[**Shavonne Tran**](https://github.com/shavonnetran)

[**Sydney Kwok**](https://github.com/sydneykwok)

[**Dora Tan**](https://github.com/DoughraT)
