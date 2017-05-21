<?php

/**
 * Human 人を扱うクラスです
 *
 */
class Human
{
    private $_name;

    /**
     * コンストラクタ
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->_name = $name;
    }

    /**
     * 名前を取得
     *
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }
}


