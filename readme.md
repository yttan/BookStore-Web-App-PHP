### BookStore web application php version

1. This project use PHP and MySQL database to generate the product information dynamically. I use PHP to query my MySQL database to obtain the details of a book and generate the proper content in HTML format.  


2. When the user submits a form to order a product, the request is sent to a server-side PHP script that stores that information in a database table. User data is stored in a table called 'users' in my database after the form is submitted. Javascript checks the form. And in insert.php, there is a function called test_input(), which also prevents insertion of bad data.

3. After successfully storing the order information in a database table, a dynamically generated confirmation page is displayed to the user with the details of the order.

4. Use Ajax to make the website dynamic and interactive. In the main page, user can choose a book. And Ajax gives the number of that book in the database. In he detailed page, when a user is filling in the form, it suggests states as the user types the first character of a state.
