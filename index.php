<?php

class index
{

    public function __construct()
    {
        echo $this->head();
        echo $this->getMenu($this->link());
        echo $this->footer();
    }

    public function link()
    {
        return array(
            'cap-2' => array(
                array(
                    'link' => "01",
                    'title' => "Exemplo de múltiplas variáveis, referindo-se a um único objeto"
                ), array(
                    'link' => "02",
                    'title' => "Auto modificação do objeto"
                ), array(
                    'link' => "03",
                    'title' => "Mudando a referência de um objeto mantendo a integridade"
                ), array(
                    'link' => "04",
                    'title' => "Modificação do objeto que resulta em outro, não é um objeto modificado"
                ), array(
                    'link' => "05",
                    'title' => "Trabalho de uma variável no scopo javascript"
                ), array(
                    'link' => "06",
                    'title' => "Comportamento de uma variável global"
                ), array(
                    'link' => "07",
                    'title' => "Usar funções dentro de contexto e depois mudar o contexto para outra variável"
                ), array(
                    'link' => "08",
                    'title' => "Exemplos de mudar o contexto das funções"
                )
            ),
            'cap-3' => array(
                array(
                    'link' => "01",
                    'title' => "A Person Object"
                ), array(
                    'link' => "02",
                    'title' => "Creating People"
                ), array(
                    'link' => "03",
                    'title' => "Object.create Polyfill"
                ), array(
                    'link' => "04",
                    'title' => "O Object Person, com um método de fábrica"
                )
            )
        );
    }

    public function getMenu(array $data)
    {
        $html = "<ul>";
        foreach ($data as $key => $value):
            $html .= "<li>{$key}</li>" .
                    "<ul>";
            foreach ($value as $item):
                $html .= "<li><a href=\"{$key}/{$item['link']}.html\">{$item['title']}</a></li>";
            endforeach;
            $html .= "</ul>";
        endforeach;
        return $html;
    }

    public function head()
    {
        return '<!DOCTYPE html>
                <html>
                    <head>
                        <title>TODO supply a title</title>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" type="text/css" href="layout.css">
                    </head>
                    <body>';
    }

    public function footer()
    {
        return '</body>
            </html>';
    }

}

$obj = new index();
