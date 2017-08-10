<?php

/**MASTER PAGE CLASS. THIS CLASS SHALL GET APPLIED TO ANY PAGE AS LONG AS IT INHERITS FROM THIS CLASS
* @author Oclemy
* @copyright 2017
*/
require_once ('classes/Components.php');
require_once ('classes/Constants.php');

class MasterPage
{
    /*
    *MASTER PAGE CONSTRUCTOR
    SHOW HEADER
    */
    public function __construct($pageTitle)
    {
        $this->printHeader($pageTitle);
    }

    /*
    1.MASTER PAGE DESTRUCTOR
    2.SHOW FOOTER
    */
    public function __destruct()
    {
        $this->printFooter();
    }


    /*
    1.HEADER HTML TAGS
    2.PASS TITLE
    */
    private function printHeader($title)
    {
        if (!isset($title)) {
            $title = '';
        }

        $site_header = '
        <!DOCTYPE html5>
        <html >
        <head>
        <meta charset="UTF-8">
        <title>' . Constants::SITE_TITLE . ' - ' . $title . '</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,300,400italic,800">
        <link rel="stylesheet" href="css/style.css">
        </head>
        <body>
        ';


        echo $site_header;

        //PRINT MENU
        Components::printMenu(array(
            "Planetary",
            "Stellar",
            "Galactic"));
    }

    /*
    1.FOOTER HTML TAGS
    */
    private function printFooter()
    {
        $site_footer = '
        <div class="footer">
        <div class="container">
        <div class="row">
        <div class="col-sm-3">
        <h4>&copy;' . Constants::SITE_TITLE . '</h4>
        <address>
          3200 Broadway Ave,<br>
          Santa Monica, CA<br>
          310-111-1111
        </address>
        </div>
        <div class="col-sm-9 text-right">
        <ul class="list-unstyled list-inline">
          <li><a href="">About</a></li>
          <li><a href="' . Constants::SITE_BASE_URL .
            '/ContactUs.php">Contact</a></li>
          <li><a href="">Jobs</a></li>
        </ul>
        </div>
        </div>
        </div>
        </div>
        </body>
        </html>
        ';

        echo $site_footer;
    }
}


?>