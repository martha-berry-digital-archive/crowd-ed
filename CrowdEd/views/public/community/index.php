<?php

/*
 * @copyright Garrick S. Bodine, 2012
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 */


echo head();

?>

<div class="row">
    <div class="span12">
        <div class="site-title"><h1><i class="icon-globe"></i> Community <small>Help us edit the collection</small></h1><hr /></div>
    </div>
</div>
<div class="row">
    <div class="span6">
        <h3><i class="icon-dashboard"></i> Completion-meter</h3>
        <p class="lead">The number of documents edited by the community from the entire current collection. <strong>Help us move forward!</strong></p>
        <?php echo $this->completionMeter(); ?>
    </div>
    <div class="span3">
        <div class="well">
            <h3 class="text-center"><i class="icon-trophy"></i> Top Editors </h3>
            <ul class="unstyled user-list">
              <?php echo $this->crowdEditors()->getEditorsByVolume($this->_db,9); ?>
            </ul>
        </div>
    </div>
    <div class="span3">
        <div class="well">
            <h3 class="text-center"><i class="icon-time"></i> Latest Editors</h3>
            <ul class="unstyled user-list">
                <?php echo $this->crowdEditors()->getMostRecentEditors($this->_db,9); ?>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="span6">
        <div class="text-center">
            <a class="twitter-timeline"  href="https://twitter.com/BerryArchive"  data-widget-id="299012645489614850">Tweets by @BerryArchive</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    
        </div>
    </div>
    <div class="span6">
            <h3><i class="icon-heart-empty"></i> Top Community Favorites</h3>
            <?php 
                echo $this->favorites()->listMostFavoritedItems($this->_db);
            ?>
    </div>
</div>
<?php echo foot(); ?>
