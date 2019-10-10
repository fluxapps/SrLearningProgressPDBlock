<?php

namespace srag\Plugins\SrLearningProgressPDBlock\Block;

use ilSrLearningProgressPDBlockPlugin;

/**
 * Class CourseBlock54
 *
 * @package srag\Plugins\SrLearningProgressPDBlock\Block
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
class CourseBlock54 extends BaseCourseBlock
{

    /**
     * @return string
     */
    public function getBlockType() : string
    {
        return ilSrLearningProgressPDBlockPlugin::PLUGIN_ID;
    }


    /**
     * @return bool
     */
    protected function isRepositoryObject() : bool
    {
        return false;
    }
}
