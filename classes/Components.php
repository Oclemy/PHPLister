<?php

/** THIS CLASS ENCAPSULATES THE HTML ELEMENTS/COMPONENTS THAT WE USE. EACH FUCNTION RETURNS A COMPONENT.
 * @author Oclemy
 * @copyright 2017
 */
require_once ('classes/Constants.php');
require_once ('classes/Spacecraft.php');
class Components
{

    /*
    1.MENU HTML TAGS
    2.PASS MENU ITEM ARRAY
    */
    public static function printMenu($menuItems)
    {
        if (isset($menuItems)) {
            $openMenu = '
            <div class="header">
            <div class="container-fluid">
            <a href=""><h1 class="brand"><span>' . Constants::SITE_TITLE .
                '</span></h1></a>
            <ul class="nav-items">
            <li><a href="' . Constants::SITE_BASE_URL . '">Home</a></li>
            ';
            echo $openMenu;

            foreach ($menuItems as $menuItem) {
                echo '<li><a href="' . Constants::SITE_BASE_URL . '/' . $menuItem . '.php">' . $menuItem .
                    '</a></li>';
            }


            $closeMenu = '<li><a class="sign-up" href="">Sign Up</a></li>
            </ul>
            </div>
            </div>
            ';
            echo $closeMenu;


        }
    }

    /*
    OPEN CONTENT SECTION
    */
   
    public function openSection()
    {
        echo '<div class="section">
  <div class="container">
    <h2 class="heading">Galactic News</h2>
    <div class="row"><div class="col-sm-8"><ul>';
    }
     /*
    CLOSE CONTENT SECTION
    */
    public function closeSection()
    {
        echo ' </ul><br/><br/><br/><br/></div></div>
  
</div>';
    }


    /*
    LIST WITH IMAGES,TEXT AND DESCRIPTION
    */
    public function printSpacecraft($spacecraft)
    {
        $list = '<div class="item">
        <h3><a href="#">' . $spacecraft->getName() . '</a></h3>
        <p><img height="150" style="max-width: 250px;background-position: top left;" src="' .
            $spacecraft->getImage() . '" /></p>
<p>' . $spacecraft->getDescription() .
            '<div class="item-bottom"><a><b> Read more</b></a></p></div>
       </div><br/><br/>
        ';
        echo $list;
    }

}

?>