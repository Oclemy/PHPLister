<?php

/**
 * HOME and INDEX PAGE
 * EXTENDS MASTER PAGE
 * @author Oclemy
 * @copyright 2017
 */

require_once ('classes/MasterPage.php');
require_once ('classes/Components.php');
require_once ('classes/Constants.php');
require_once ('classes/Spacecraft.php');

class Home extends MasterPage
{
    /*
    CONSTRUCTOR
    */
    public function __construct()
    {
        parent::__construct($this->__toString());
    }
    /*
    SHOW COMPONENTS
    */
    public function show()
    {
        $components = new Components();
        $components->openSection(); 
             foreach($this->getSpacecrafts() as $spacecraft)
                {
                    $components->printSpacecraft($spacecraft);
                }
         $components->closeSection();

    }

    public function getSpacecrafts()
    {
        $spacecrafts=array();
        
        $s = new Spacecraft();
        $s->setName('Casini');
        $s->setDescription('Cassini–Huygens is an unmanned spacecraft sent to the planet Saturn. It is a Flagship-class NASA–ESA–ASI robotic spacecraft. Cassini is the fourth space probe to visit Saturn and the first to enter orbit');
        $s->setImage(Constants::SITE_BASE_URL.'/images/casini.png');
        $spacecrafts[]=$s;

        $s = new Spacecraft();
        $s->setName('Atlantis');
        $s->setDescription('Space Shuttle Enterprise was the first orbiter of the Space Shuttle system. Rolled out on September 17, 1976, it was built for NASA as part of the Space Shuttle program to perform atmospheric test ');
        $s->setImage(Constants::SITE_BASE_URL.'/images/atlantis.png');
        $spacecrafts[]=$s;

        
         $s = new Spacecraft();
          $s->setName('New Horizon');
          $s->setDescription('New Horizons launched on Jan. 19, 2006 and conducted a six-month-long reconnaissance flyby study of Pluto and its moons in summer 2015,');
          $s->setImage(Constants::SITE_BASE_URL.'/images/newhorizon.png');
          $spacecrafts[]=$s;
          
          $s = new Spacecraft();
          $s->setName('Chandra');
          $s->setDescription('The Chandra X-ray Observatory, previously known as the Advanced X-ray Astrophysics Facility, is a Flagship-class space observatory launched on STS-93 by NASA on July 23, 1999.');
          $s->setImage(Constants::SITE_BASE_URL.'/images/chandra.png');
          $spacecrafts[]=$s;

          $s = new Spacecraft();
          $s->setName('Spirit');
          $s->setDescription('Spirit, also known as MER-A or MER-2, is a robotic rover on Mars, active from 2004 to 2010. It was one of two rovers of NASAs ongoing Mars Exploration Rover Mission.');
          $s->setImage(Constants::SITE_BASE_URL.'/images/spirit.png');
          $spacecrafts[]=$s;
 
        
        return $spacecrafts;

    }

    /*
    PAGE TAG
    */
    public function __toString()
    {
        return 'Home';
    }

}

/*
*SHOW HOMEPAGE
*/

$home = new Home();
$home->show();









?>