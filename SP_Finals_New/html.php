<?php

require_once 'FileHandler.php';
require_once 'HTMLGenerator.php';

$filePathHTML = "index.html";
FileHandler::createFileHTML($filePathHTML);

$htmlGenerator = new MyNamespace\HTMLGenerator(); 

$htmlGenerator->addTag('header')
->addTag('title')->addContent('Libretto Books')->addCloseTag('title')
->addLinkTag('../SP_Finals/css/style.css', ['rel' => 'stylesheet'])
->addLinkTag('../SP_Finals/css/header.css', ['rel' => 'stylesheet'])
->addLinkTag('../SP_Finals/css/body.css', ['rel' => 'stylesheet'])
->addLinkTag('../SP_Finals/css/footer.css', ['rel' => 'stylesheet'])

    ->addTag('section', ['id' => 'header'])
    ->addTag('section', ['id' => 'lefthead'])->addCloseTag('section')
    ->addTag('section', ['id' => 'righthead'])->addCloseTag('section')
    ->addCloseTag('section')

    ->addTag('section', ['id' => 'mainmenubar'])
    ->addTag('ul', ['id' => 'mainmenu'])
    ->addTag('li')->addTag('a', ['href' => '#'])->addContent('Home')->addCloseTag('a')->addCloseTag('li')
    ->addTag('li')->addTag('a', ['href' => '#'])->addContent('Reading')->addCloseTag('a')
        ->addTag('ul', ['class' => 'sub1'])
        ->addTag('li')->addTag('a', ['href' => '#'])->addContent('Novels')->addCloseTag('a')->addCloseTag('li')
        ->addTag('li')->addTag('a', ['href' => '#'])->addContent('Hardbound')->addCloseTag('a')->addCloseTag('li')
        ->addTag('li')->addTag('a', ['href' => '#'])->addContent('Paperback')->addCloseTag('a')->addCloseTag('li')
        ->addTag('li')->addTag('a', ['href' => '#'])->addContent('Comics')->addCloseTag('a')->addCloseTag('li')
        ->addTag('li')->addTag('a', ['href' => '#'])->addContent('Categories')->addCloseTag('a')->addCloseTag('li')
        ->addCloseTag('ul')->addCloseTag('li')
    ->addTag('li')->addTag('a', ['href' => '#'])->addContent('Featured')->addCloseTag('a')->addCloseTag('li')
    ->addTag('li')->addTag('a', ['href' => '#'])->addContent('Orders')->addCloseTag('a')->addCloseTag('li')
    ->addTag('li')->addTag('a', ['href' => '#'])->addContent('Deal & Orders')->addCloseTag('a')->addCloseTag('li')
    ->addCloseTag('ul')
    ->addCloseTag('section')
    
    ->addCloseTag('header');

$htmlGenerator->addTag('body')
    ->addTag('section', ['id' => 'maincontainer'])
    ->addTag('section', ['id' => 'headline'])
        ->addTag('section', ['id' => 'headlleft'])
            ->addImgTag('images/hunger_games_trilogy.jpg', ['title' => 'The Hunger Games Trilogy','alt' => 'The Hunger Games Trilogy'])
        ->addCloseTag('section')
        ->addTag('section', ['id' => 'headlright'])
            ->addTag('br')->addTag('br')
            ->addTag('span', ['class' => 'headlineimpact'])->addContent('Special Offer!!!')->addCloseTag('span')->addTag('br')
            ->addTag('span', ['class' => 'headlinetext'])->addContent('Limited stocks only!!!')->addCloseTag('span')->addTag('br')
        ->addCloseTag('section')
    ->addCloseTag('section')
    ->addTag('section', ['id' => 'left'])->addCloseTag('section')
    ->addTag('section', ['id' => 'right'])
        ->addTag('span', ['class' => 'blockheadings'])->addContent('Book News')->addCloseTag('span')
        ->addTag('section', ['id' => 'placeholder'])

        ->addTag('section', ['class' => 'sections'])
        ->addTag('p')->addContent('Literature')->addCloseTag('p')
        ->addTag('span', ['class' => 'sectiontext'])
        ->addContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
        qui officia deserunt mollit anim id est laborum.&quot;')
        ->addCloseTag('span')
        ->addCloseTag('section')

        ->addTag('section', ['class' => 'sections'])
        ->addTag('p')->addContent('Arts')->addCloseTag('p')
        ->addTag('span', ['class' => 'sectiontext'])
        ->addContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
        qui officia deserunt mollit anim id est laborum.&quot;')
        ->addCloseTag('span')
        ->addCloseTag('section')

        ->addTag('section', ['class' => 'sections'])
        ->addTag('p')->addContent('Drama')->addCloseTag('p')
        ->addTag('span', ['class' => 'sectiontext'])
        ->addContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
        qui officia deserunt mollit anim id est laborum.&quot;')
        ->addCloseTag('span')
        ->addCloseTag('section')

        ->addTag('section', ['class' => 'sections'])
        ->addTag('p')->addContent('Science/Fiction')->addCloseTag('p')
        ->addTag('span', ['class' => 'sectiontext'])
        ->addContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
        qui officia deserunt mollit anim id est laborum.&quot;')
        ->addCloseTag('span')
        ->addCloseTag('section')

        ->addTag('section', ['class' => 'sections'])
        ->addTag('p')->addContent('Horror')->addCloseTag('p')
        ->addTag('span', ['class' => 'sectiontext'])
        ->addContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
        qui officia deserunt mollit anim id est laborum.&quot;')
        ->addCloseTag('span')
        ->addCloseTag('section')

        ->addTag('section', ['class' => 'sections'])
        ->addTag('p')->addContent('Love Story')->addCloseTag('p')
        ->addTag('span', ['class' => 'sectiontext'])
        ->addContent('&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa 
        qui officia deserunt mollit anim id est laborum.&quot;')
        ->addCloseTag('span')
        ->addCloseTag('section')

        ->addCloseTag('section')

    ->addCloseTag('section')
    ->addCloseTag('section')
    
    ->addCloseTag('body');

$htmlGenerator->addTag('footer')
    ->addTag('section', ['id' => 'footer'])
    ->addTag('span', ['id' => 'copyrighttext'])
    ->addContent('Copyright &copy; International Web Development, All rights reserved 2013')
    ->addCloseTag('span')
    ->addCloseTag('footer')
    ->addCloseTag('footer')
    ->addTag('br');
    