<?php

require_once 'HTMLGenerator.php';

$head = (new Head())
    ->setContent(
        (new Title())->setContent("Libretto Books")->render() .
        (new Link())->setAttribute('rel', 'stylesheet')->setAttribute('type', 'text/css')->setAttribute('href', '../Integrated/css/style.css')->render() .
        (new Link())->setAttribute('rel', 'stylesheet')->setAttribute('type', 'text/css')->setAttribute('href', '../Integrated/css/header.css')->render() .
        (new Link())->setAttribute('rel', 'stylesheet')->setAttribute('type', 'text/css')->setAttribute('href', '../Integrated/css/body.css')->render() .
        (new Link())->setAttribute('rel', 'stylesheet')->setAttribute('type', 'text/css')->setAttribute('href', '../Integrated/css/footer.css')->render()
    );

$header = (new Section())->setAttribute('id', 'header')
    ->setContent(
        (new Section())->setAttribute('id', 'lefthead')->render() .
        (new Section())->setAttribute('id', 'righthead')->render()
    );

$mainmenu = (new Ul())->setAttribute('id', 'mainmenu')
    ->setContent(
        (new Li())->setContent((new A())->setAttribute('href', '#')->setContent('Home')->render())->render() .
        (new Li())->setContent(
            (new A())->setAttribute('href', '#')->setContent('Reading')->render() .
            (new Ul())->setAttribute('class', 'sub1')
                ->setContent(
                    (new Li())->setContent((new A())->setAttribute('href', '#')->setContent('Novels')->render())->render() .
                    (new Li())->setContent((new A())->setAttribute('href', '#')->setContent('Hardbound')->render())->render() .
                    (new Li())->setContent((new A())->setAttribute('href', '#')->setContent('Paperback')->render())->render() .
                    (new Li())->setContent((new A())->setAttribute('href', '#')->setContent('Comics')->render())->render() .
                    (new Li())->setContent((new A())->setAttribute('href', '#')->setContent('Categories')->render())->render()
                )->render()
        )->render() .
        (new Li())->setContent((new A())->setAttribute('href', '#')->setContent('Featured')->render())->render() .
        (new Li())->setContent((new A())->setAttribute('href', '#')->setContent('Orders')->render())->render() .
        (new Li())->setContent((new A())->setAttribute('href', '#')->setContent('Deal & Offers')->render())->render()
    );

$mainmenubar = (new Section())->setAttribute('id', 'mainmenubar')
    ->setContent($mainmenu->render());

$headline = (new Section())->setAttribute('id', 'headline')
    ->setContent(
        (new Section())->setAttribute('id', 'headlleft')
            ->setContent((new Img())->setAttribute('src', '../Integrated/images/hunger_games_trilogy.jpg')->setAttribute('title', 'The Hunger Games Trilogy')->setAttribute('alt', 'The Hunger Games Trilogy')->render())->render() .
        (new Section())->setAttribute('id', 'headlright')
            ->setContent(
                '<br /><br />' .
                (new Span())->setAttribute('class', 'headlineimpact')->setContent('Special Offer!!!')->render() . '<br />' .
                (new Span())->setAttribute('class', 'headlinetext')->setContent('Limited stocks only!!!')->render() . '<br />'
            )->render()
    );

$sectionsContent = function($title, $text) {
    return (new Section())->setAttribute('class', 'sections')
        ->setContent(
            (new P())->setContent($title)->render() .
            (new Span())->setAttribute('class', 'sectiontext')->setContent($text)->render()
        )->render();
};

$placeholder = (new Section())->setAttribute('id', 'placeholder')
    ->setContent(
        $sectionsContent('Literature', '&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;') .
        $sectionsContent('Arts', '&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;') . '<br />' .
        $sectionsContent('Drama', '&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;') .
        $sectionsContent('Science/Fiction', '&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;') . '<br />' .
        $sectionsContent('Horror', '&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;') .
        $sectionsContent('Love Story', '&quot;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;')
    );

$maincontainer = (new Section())->setAttribute('id', 'maincontainer')
    ->setContent(
        $headline->render() .
        (new Section())->setAttribute('id', 'left')->render() .
        (new Section())->setAttribute('id', 'right')
            ->setContent(
                (new Span())->setAttribute('class', 'blockheadings')->setContent('Book News')->render() .
                $placeholder->render()
            )->render()
    );

$footer = (new Section())->setAttribute('id', 'footer')
    ->setContent(
        (new Span())->setAttribute('id', 'copyrighttext')->setContent('Copyright &copy; International Web Development, All rights reserved 2013')->render()
    );

$body = (new Body())
    ->setContent(
        $header->render() .
        $mainmenubar->render() .
        $maincontainer->render() .
        $footer->render() . '<br />'
    );

$htmlContent = "<!DOCTYPE html>
<html>
    {$head->render()}
    {$body->render()}
</html>";

file_put_contents('index.html', $htmlContent);

echo "HTML file 'index.html' has been created successfully.";

?>
