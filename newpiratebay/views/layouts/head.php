<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= CHtml::encode($this->pageTitle); ?></title>
    <meta name="description" content="Download music, movies, games, software and much more. The Pirate Bay is the world's largest bittorrent tracker.">
    <meta name="keywords" content="mp3, avi, bittorrent, piratebay, pirate bay, proxy, torrent, torrents, movies, music, games, applications, apps, download, upload, share, kopimi, magnets, magnet">
    <!--[if lt IE 9]>
        <link rel="stylesheet" href="/css/ie.css">
        <script src="/js/html5_for_ie.js"></script>
    <![endif]-->
    <?php
        Yii::app()->clientScript->registerPackage('base');
        Yii::app()->clientScript->registerCoreScript('jquery');
    ?>
    <link rel="stylesheet" href="/assets/603d1d82/css/bootstrap.min.css">
    <style>
        html, body { font-family: 'Lato', sans-serif; }
        
        #header { background: #16161d; padding: 1em 0; text-align: left; }
        
        #header #logo { height: 40px; }
        
        #header ul { list-style: none; margin: 11px 0 0; font-size: 1.1em; padding: 0; }
        #header ul li { display: inline; }
        #header ul li a { color: #ABABAB; text-transform: uppercase; display: inline-block; margin-right: 2em; transition: .2s; }
        #header ul li a:hover { border-bottom: none; color: white; text-decoration: none; }
        #header ul li a.active { color: white; }
        
        #search #q { text-align: right; position: relative; }
        #search input { background: #343434; padding: 10px 15px; color: #aaa; border: none; font-family: 'Lato', sans-serif; width: 70%; text-indent: 0; }
        #search #searchIcon { color: #aaa; position: absolute; right: 15px; top: 14px; }
        
        #categories { background: #ECECEC; padding: 1em 0; text-align: left; }
        
        #categories ul { float: left; list-style: none; margin: .5em 0; padding: 0; }
        #categories ul li { display: inline; }
        #categories ul li a { display: inline-block; margin-right: 2em; color: #8B8B8B; border: none; transition: .2s; }
        #categories ul li a:hover { color: black; text-decoration: none; }
        #categories ul li a.active { color: black; font-weight: bold; }
        
        #categories #searchResultsCount { float: right; margin-top: .5em; }
        
        #title { font-weight: bold; font-size: 1.5em; text-align: left; }
        
        #footer { background: black; text-align: center; padding: 2em 0; color: white; }
        #footer a { color: white; border: none; }
        #footer #credits { font-size: .8em; margin-top: 1em; color: #A9A9A9; }
    </style>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
    <script>
        $(function() {
            var inputCheckBox = $('input[type=checkbox]');
            inputCheckBox.click(function() {
                inputCheckBox.attr('checked', false);
                $(this).attr('checked', true);
            });
            
            $('#q input').focus(function(e) {
                $(this).animate({ 'width': '100%' });
            });
            
            $('#q input').blur(function(e) {
                $(this).animate({ 'width': '70%' });
            });
            
        });
    </script>
    
    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-1 col-sm-1">
                    <a href="/"><img src="/img/npb_logo.jpeg" id="logo"></a>
                </div>
                <ul id="mainMenu" class="col-md-7 col-sm-8">
                    <li><a href="<?= Yii::app()->createUrl('main/browse'); ?>" <?= ($this->getAction()->getId() == 'browse' || $this->getAction()->getId() == 'index' || Yii::app()->request->getParam('iht') ? 'class="active"' : ''); ?>>Browse</a></li>
                    <li><a href="<?= Yii::app()->createUrl('main/recent'); ?>" <?= ($this->getAction()->getId() == 'recent' ? 'class="active"' : ''); ?>>Recent</a></li>
                    <li><a href="#">Top 100</a></li>
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Register</a></li>
                </ul>
                <div id="search" class="col-md-4 col-sm-3">
                    <form method="get" id="q" action="<?= $this->createUrl('main/search'); ?>">
                        <input type="text" name="q" placeholder="Search" value="<?= CHtml::encode(Yii::app()->request->getParam('q')); ?>">
                        <i class="glyphicon glyphicon-search" id="searchIcon"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <div id="categories">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul id="categoryMenu">
                        <li><a href="/">All</a></li>
                        <li><a href="/search?iht=5" <?= (Yii::app()->request->getParam('iht') == '5' ? 'class="active"' : ''); ?>>Movies</a></li>
                        <li><a href="/search?iht=8" <?= (Yii::app()->request->getParam('iht') == '8' ? 'class="active"' : ''); ?>>TV</a></li>
                        <li><a href="/search?iht=6" <?= (Yii::app()->request->getParam('iht') == '6' ? 'class="active"' : ''); ?>>Music</a></li>
                        <li><a href="/search?iht=2" <?= (Yii::app()->request->getParam('iht') == '2' ? 'class="active"' : ''); ?>>Software</a></li>
                        <li><a href="/search?iht=9" <?= (Yii::app()->request->getParam('iht') == '9' ? 'class="active"' : ''); ?>>Books</a></li>
                        <li><a href="/search?iht=7" <?= (Yii::app()->request->getParam('iht') == '7' ? 'class="active"' : ''); ?>>Other</a></li>
                    </ul>
                </div>
                <div id="searchResultsCount" class="col-md-4 text-right">
                    Around 1,000 search results.
                </div>
            </div>
        </div>
    </div>
   
   <!--
   <div id="title">
       <div class="container" style="padding: 1.2em 0;">
           <?= (!Yii::app()->request->getParam('q') ? ucwords($this->getAction()->getId()) : 'Search results for: "' . Yii::app()->request->getParam('q') . '"'); ?>
       </div>
   </div>
   -->
   
    <?php /*if (!$this->mainPage) : ?>
    <div id="header">
                    <form method="get" id="q" action="<?= $this->createUrl('main/search'); ?>">
                    <a href="/" class="img" style="float: left; text-decoration: none;"><img src="/img/TPB_logo_small.png" id="TPBlogo" alt="The Pirate Bay"></a>
                    <div id="srchform">
                        <div style="margin-bottom: 15px;">
                            <b><a href="/" title="Search Torrents">Search Torrents</a></b>&nbsp;&nbsp;|&nbsp;
                            <a href="<?= Yii::app()->createUrl('main/browse'); ?>" title="Browse Torrents">Browse Torrents</a>&nbsp;&nbsp;|&nbsp;
                            <a href="<?= Yii::app()->createUrl('main/recent'); ?>" title="Recent Torrent">Recent Torrents</a>
                        </div>

                        <input type="search&quot;" class="inputbox topsrch" title="Piratesearch" name="q" placeholder="search here..." value="<?=  CHtml::encode(Yii::app()->request->getParam('q'));?>">
                        <input id="searchBtn" value="" type="submit" class="submitbutton"><br>


                        <label title="All"><input name="" type="checkbox" <?php if (!Yii::app()->request->getParam('iht')) : ?>checked<?php endif; ?>>All</label>
                        <?php

                        $tags = LCategory::$categoriesTags;
                        foreach($tags as $tagId => $tag) { ?>
                            <label title="<?=$tag;?>"><input name="iht" type="checkbox" value="<?=$tagId;?>"<?php if (Yii::app()->request->getParam('iht') == $tagId) : ?>checked<?php endif; ?>><?= $tag; ?></label>
                        <?php
                        }
                        ?>
                    </div>
            </form>
    </div>
    <?php endif; */?>
