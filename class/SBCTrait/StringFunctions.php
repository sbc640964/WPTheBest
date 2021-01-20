<?php


namespace SBC\SBCTrait;

/*
 * Table of Content:
 * 1. htmlToTable function to convert html to email template
 */


trait StringFunctions
{
    public static function htmlToTable($html = '') {
//        $table_replaces = array(
//            'table' => '.elementor-container',
//            'tr' => '.elementor-row',
//            'td' => '.elementor-column',
//        );
        $dom = new \PHPHtmlParser\Dom;
        $dom->load($html);
        foreach ($dom->find('.elementor-container') as $tag) {
            $changeTagTable = function() {
                $this->name = 'table';
            };
            $changeTagTable->call($tag->tag);
        }
        foreach ($dom->find('.elementor-row') as $tag) {
            $changeTagTr = function() {
                $this->name = 'tr';
            };
            $changeTagTr->call($tag->tag);
        }
        foreach ($dom->find('.elementor-column') as $tag) {
            $changeTagTd = function() {
                $this->name = 'td';
            };
            $changeTagTd->call($tag->tag);
        }
        $html_table = (string) $dom;
        return $html_table;
    }
}