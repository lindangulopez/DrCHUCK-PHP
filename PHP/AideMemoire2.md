Why is it important to have extensive error checking on SQL statements when an application is in production?

    - Tracebacks make your application look bad

    - The developer/production team needs good detail on any errors

    - Users will rarely report errors and never give enough detail

    - Some errors are subtle and only show up very rarely


What is the purpose of the PDO::errorinfo() data?

    - It gives extended detail when a PDO function returns an error
    
How does a web server recognize a particular web browser?

     - Cookies

The Web is a stateful system.

       - False

The browser does not always maintain a connection to the server.

       - True

Cookies can be made to last for how long?

        - Minutes

        - Months

        - Till the session ends


If a browser is contacting a server for the very first time, the browser does not send cookies in its first request.

        - True

Sessions are server controlled and are protected from the users direct access to it.

        - True

session_start() is used to

        - Make a new session

        - Restore an old session


session_start() can be placed anywhere in the php file.

        . False


The [_____] function is used to remove a session.

        - session_destroy() 


$_SESSION is a

        - Super global variable

        - Variable that stores session details

        - Associative array



PHP applications can make changes to the $_SESSION variable.

        - True

End users can make changes to the $_SESSION variable.

        - False

Generally, if there are no cookies for a web site in the browser, PHP will make a new session as soon as the user tries to access the url.

        - True

When do session cookies expire?

        - When the browser is closed


Where are non-session cookies stored?
0 / 1 point

In the memory of the PHP server

In the cloud on a separate memcached server 

On the hard drive of the PHP server

In the database on the server

On the hard drive of the user's computer
Incorrect
16.
Question 16

What is the typical session identifier?
0 / 1 point

The MD5 hash of the domain name of the server

A large random number chosen by the server

The number of seconds since January 1, 1970

The MD5 hash of the user's email address

A large random number chosen by the browser
Incorrect


If a browser does not support cookies, how can PHP maintain a session?

        - By including the session identifier as a parameter every GET and POST request


