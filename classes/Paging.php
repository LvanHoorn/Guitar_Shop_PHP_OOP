<?php
class Paging {

    private $_records;
    private $_max_pp;
    private $_numb_of_pages;
    private $_numb_of_records;
    private $_current;
    private $_offset = 0;
    private static $_key = 'pg';
    public $_url;

    public function __construct($rows, $max = 3) {
      $this->_records = $rows;
      $this->_number_of_pages = count($this->_records);
      $this->_max_pp = $max;
      $this->_url = Url::getCurrentUrl(self::$_key);
      $current = Url::getParam(self::$_key);
      $this->_current = !empty($current) ? $current : 1;
      $this->numberOfPages();
      $this->getOffSet();
    }

    private function numberOfPages() {
      $this->_numb_of_pages = ceil($this->_numb_of_records / $this->_max_pp);
    }

    private function getOffSet() {
      $this->_offset = ($this->_current -1) * $this->_max_pp;
    }

    public function getRecords() {
      $out = array();
      if($this->_numb_of_pages > 1) {
        $last = ($this->_offset + $this->_max_pp);

        for($i = $this->_offset; $i < $last; $i++) {
          if($i < $this->_numb_of_records) {
            $out[] = $this->_records[$i];
          }
        }
      } else {
        $out = $this->_records;
      }
      return $out;
    }

    private function getLinks() {
      if($this->_numb_of_pages > 1) {

        $out = array();

        // The First link
        if($this->_current > 1) {
          $out[] = "<a href=\"".$this->_url."\">Eerste Pagina</a>";
        } else {
          $out[] = "<span>Eerste Pagina</span>";
        }

        // Previous link
        if($this->_current > 1) {

          // Previous page number
          $id = ($this->_current - 1);

          $url = $id > 1 ? $this->_url."&amp;".self::
           $_key."=".$id : $this->_url;
          $out[] = "<a href=\"{$url}\">Vorige Pagina</a>";

        } else {
          $out[] = "<span>Vorige Pagina</span>";
        }

        // Next link
        if($this->_current != $this->_numb_of_pages) {

          // Next page number
          $id = ($this->_current + 1);

          $url = $this->_url."&amp;".self::$_key."=".$id;
          $out[] = "<a href=\"{$url}\">Volgende Pagina</a>";

        } else {
          $out[] = "<span>Volgende Pagina</span>";
        }

        // Last Link
        if($this->_current != $this->_numb_of_pages) {
          $url = $this->_url."&amp;".self::$_key."=".$this->_numb_of_pages;
          $out[] = "<a href=\"{$url}\">Laatse Pagina</a>";
        } else {
          $out[] = "<span>Laatste Pagina</span>";
        }

        return "<li>".implode("</li><li>", $out)."</li>";
      }
    }

    public function getPaging() {
      $links = $this->getLinks();
      if(!empty($links)) {
        $out  = "<ul class=\"paging\">";
        $out .= $links;
        $out .= "</ul>";
        return $out;
      }
    }
}

 ?>
