<?php

namespace CssBuilder;

class CssBuilder {
    private $cssContent = [];

    public function addCssRule($tag, $rule) {
        $this->cssContent[$tag][] = $rule;
        return $this; // Return $this to enable method chaining
    }

    public function buildCssFile($filename) {
        $file = fopen($filename, "w"); // Open file for writing
        if ($file) {
            foreach ($this->cssContent as $htmlTag => $rules) {
                fwrite($file, implode("\n", $rules) . "\n");
            }
            fclose($file);
            return true;
        } else {
            return false;
        }
    }
}
