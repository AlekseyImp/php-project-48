<?php
function gendiff()
{
    $doc = <<<DOC
Generate diff

Usage: 
  gendiff (-h|--help)
  gendiff (-v|--version)
  gendiff [--format <fmt>] <firstFile> <secondFile>

Options:
  -h --help        Show this screen.
  -v --version     Show version.
  --format <fmt>   Show format [default: stylish]
DOC;


    $result = Docopt::handle($doc, array('version' => '1.0.0rc2'));
    foreach ($result as $k => $v)
        echo $k . ': ' . json_encode($v) . PHP_EOL;
}