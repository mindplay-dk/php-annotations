<?php

/**
 * This file is part of the php-annotation framework.
 *
 * (c) Rasmus Schultz <rasmus@mindplay.dk>
 *
 * This software is licensed under the GNU LGPL license
 * for more information, please see:
 *
 * <https://github.com/mindplay-dk/php-annotations>
 */

namespace mindplay\annotations\standard;

use mindplay\annotations\Annotation;

/**
 * Specifies the name of a view to use to format a class or property for display.
 *
 * When rendering forms/widgets/inputs, if an EditorAnnotation is present, it
 * takes precedence over a ViewAnnotation - otherwise, the ViewAnnotation may be
 * used to establish the name of a view to use for rendering an input, too.
 *
 * @usage('class'=>true, 'property'=>true, 'inherited'=>true)
 *
 * @todo implement this
 */
class ViewAnnotation extends Annotation
{
    /**
     * The name of the view to use when displaying a class or property.
     */
    public $name;
}
