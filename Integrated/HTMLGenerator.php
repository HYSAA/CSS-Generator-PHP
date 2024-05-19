<?php
class HTMLElement {
    protected $tagName;
    protected $attributes = [];
    protected $content = "";

    public function __construct($tagName) {
        $this->tagName = $tagName;
    }

    public function setAttribute($name, $value) {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function setContent($content) {
        $this->content = $content;
        return $this;
    }

    public function render() {
        $attributes = "";
        foreach ($this->attributes as $name => $value) {
            $attributes .= " {$name}=\"" . htmlspecialchars($value) . "\"";
        }

        return "<{$this->tagName}{$attributes}>{$this->content}</{$this->tagName}>";
    }
}
class Head extends HTMLElement {
    public function __construct() {
        parent::__construct('head');
    }
}

class Title extends HTMLElement {
    public function __construct() {
        parent::__construct('title');
    }
}

class Link extends HTMLElement {
    public function __construct() {
        parent::__construct('link');
    }

    public function render() {
        $attributes = "";
        foreach ($this->attributes as $name => $value) {
            $attributes .= " {$name}=\"" . htmlspecialchars($value) . "\"";
        }

        return "<{$this->tagName}{$attributes} />";
    }
}

class Body extends HTMLElement {
    public function __construct() {
        parent::__construct('body');
    }
}

class Section extends HTMLElement {
    public function __construct() {
        parent::__construct('section');
    }
}

class Ul extends HTMLElement {
    public function __construct() {
        parent::__construct('ul');
    }
}

class Li extends HTMLElement {
    public function __construct() {
        parent::__construct('li');
    }
}

class A extends HTMLElement {
    public function __construct() {
        parent::__construct('a');
    }
}

class Img extends HTMLElement {
    public function __construct() {
        parent::__construct('img');
    }

    public function render() {
        $attributes = "";
        foreach ($this->attributes as $name => $value) {
            $attributes .= " {$name}=\"" . htmlspecialchars($value) . "\"";
        }

        return "<{$this->tagName}{$attributes} />";
    }
}

class Span extends HTMLElement {
    public function __construct() {
        parent::__construct('span');
    }
}

class P extends HTMLElement {
    public function __construct() {
        parent::__construct('p');
    }
}

?>
