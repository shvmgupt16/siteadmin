<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">

<head>
<style>
body
{
    margin: 0;
    width: 100%;
    background: url('images/theronbg.png') 30px 0 repeat;
    font-family: 'Open Sans', sans-serif;
}
a {

    color: #4C9CF1;
    text-decoration: none;
    font-weight: bold;

}

a:hover {

    color: #444;

}

img {

    width: 100%;

}

header {

    background: #fff;
    width: 100%;
    height: 76px;
    position: fixed;
    top: 0;
    left: 0;
    border-bottom: 4px solid #4C9CF1;
    z-index: 100;

}
#logo{

    margin-left: 20px;
    float: left;
    width: 200px;
    height: 75px;
    background: url(images/logo.png) no-repeat center;
    display: block;

}

nav {

    float: right;
    padding: 20px;    

}

#menu-icon {

    display: hidden;
    width: 40px;
    height: 40px;
    background: #4C8FEC url(images/menu-icon.png) center;

}

a:hover#menu-icon {

    background-color: #444;
    border-radius: 4px 4px 0 0;

}

ul {

    list-style: none;

}

li {

    display: inline-block;
    float: left;
    padding: 10px

}

.current {

    color: #2262AD;

}

section {

    margin: 80px auto 40px;
    max-width: 980px;
    position: relative;
    padding: 20px

}
/*MEDIA QUERY*/
@media only screen and (max-width : 640px) { /*If device width is higher than 640px use this css and if less than 640px use above */

    header {

        position: absolute;

    }

    #menu-icon {

        display:inline-block;

    }

    nav ul, nav:active ul { 

        display: none;
        position: absolute;
        padding: 20px;
        background: #fff;
        border: 5px solid #444;
        right: 20px;
        top: 60px;
        width: 50%;
        border-radius: 4px 0 4px 4px;

    }

    nav li {

        text-align: center;
        width: 100%;
        padding: 10px 0;
        margin: 0;

    }

    nav:hover ul {

        display: block;

    }
}
</style>
<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PHPGang Programming Blog, Tutorials, jQuery, Ajax, PHP, MySQL and Demos</title>

</head>
<body>
<header>
    <a href="#" id="logo"></a>
        <nav>
            <a href="#" id="menu-icon"></a>
            <ul>
                <li><a href="http://www.phpgang.com/" class="current">Home</a></li>
                <li><a href="demo.phpgang.com/">Demos</a></li>
                <li><a href="http://www.phpgang.com/category/jquery">jQuery</a></li>
                <li><a href="http://www.phpgang.com/category/php">PHP</a></li>
                <li><a href="http://www.phpgang.com/request-tutorials-here">Contact</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>